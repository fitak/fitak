<?php

namespace Fitak\Crawler;


use ElasticSearch;
use Fitak\EduxFile;
use Fitak\RepositoryContainer;
use Nette\Utils\DateTime;
use Nette\Utils\Strings;


class Edux
{

	const URL_LIST = 'https://edux.fit.cvut.cz/courses/';
	const URL_COURSE = 'https://edux.fit.cvut.cz/courses/%s/_export/xhtmlbody/%s';
	const URL_FILE = 'https://edux.fit.cvut.cz/courses/%s/%s';

	/**
	 * @var ElasticSearch
	 */
	private $elastic;

	/**
	 * @var RepositoryContainer
	 */
	private $orm;

	public function __construct(ElasticSearch $elastic, RepositoryContainer $orm)
	{
		$this->elastic = $elastic;
		$this->orm = $orm;
	}

	public function getCoursesUrls()
	{
		list($html) = $this->makeRequest(self::URL_LIST);
		$matches = [];
		preg_match_all('~href=\\"([^"]+-[^"]+)\\"~', $html, $matches);

		$urls = [];
		foreach ($matches[1] as $course)
		{
			$course = rtrim($course, '/');
			$urls[$course] = sprintf(self::URL_COURSE, $course, '%s');
		}
		return $urls;
	}

	public function processCourse($course, $courseTemplate)
	{
		echo "\n\n$course\n";
		$list = ['start' => 1, 'sidebar' => 1];
		$processed = [];
		do
		{
			$k = array_keys($list);
			$part = array_pop($k);
			unset($list[$part]);
			$processed[$part] = 1;
			$url = sprintf($courseTemplate, $part);
			echo "   $part\n";

			$pages = $this->processPage($course, $url);
			$new = array_diff_key($pages, $processed);
			$list = array_merge($list, $new);
		}
		while ($list);
	}

	/**
	 * @param string $course
	 * @param string $url
	 * @return string[] pages
	 */
	protected function processPage($course, $url)
	{
		list($html) = $this->makeRequest($url);

		// TODO Process links to materials

		$matches = [];
		preg_match_all('~href="/courses/' . preg_quote($course, '~') . '/+((?!(/?en|lib|_?export))[^"#?]+)~i', $html, $matches);

		$new = [];
		foreach ($matches[1] as $match)
		{
			if ($this->isIndexable($match))
			{
				$this->processFile($course, $match);
			}
			else
			{
				// links to parse
				$new[$match] = 1;
			}
		}
		return $new;
	}

	private function isIndexable($url)
	{
		$norm = '.' . Strings::lower($url);
		foreach ($this->getExtensions() as $ext)
		{
			if (Strings::endsWith($norm, $ext))
			{
				return TRUE;
			}
		}
		return FALSE;
	}

	protected function getExtensions()
	{
		return [
			'doc', 'dot', 'docx', // word processors
			'pdf',
			'ma', 'nb', 'mb', // mathematica
		];
	}

	public function makeRequest($url)
	{
		$context = stream_context_create([
			'http' => [
				'header' =>
					// TODO create auth and persist
					'Cookie: DW6666cd76f96956469e7be39d750cc7d9=ZGl0ZW1pa3U%3D%7C1%7CL3NVbXZvR3Fwdy95V3owQkcreTdUUT09'
			]
		]);
		$content = file_get_contents($url, FALSE, $context);
		$headers = $this->parseHeaders($http_response_header);
		return [$content, $headers];
	}

	/**
	 * Does not support multiple same headers (such as set-cookie)
	 * @param array $headers
	 * @return array
	 */
	private function parseHeaders(array $headers)
	{
		$res = [];
		foreach ($headers as $header)
		{
			$o = Strings::match($header, '~^(?P<name>[^:]+?):\s*(?P<value>.*?)\s*$~');
			$res[Strings::lower($o['name'])] = $o['value'];
		}
		return $res;
	}

	public function processFile($course, $fileName)
	{
		echo "PROCESSING FILE $fileName\n";
		$url = sprintf(self::URL_FILE, $course, $fileName);
		list($content, $headers) = $this->makeRequest($url);

		if (! $file = $this->orm->contents->getBy(['link' => $url]))
		{
			$file = new EduxFile();
			$file->link = $url;
		}

		// TODO remove
		$file->message = json_encode([
			'hash' => md5($content),
			'headers' => $headers,
		]);

		$file->updatedTime = $file->createdTime
			= isset($headers['Last-Modified']) ? $headers['Last-Modified'] : new DateTime;

		$this->orm->contents->persist($file);
		$this->orm->flush();

		$this->elastic->addToIndex(ElasticSearch::TYPE_CONTENT, $file->id, [
			'updated_time' => $file->updatedTime->getTimestamp(),
			'tags' => [$course],
			'file' => [
				'_content_type' => isset($headers['Content-Type']) ? $headers['Content-Type'] : NULL,
				'_name' => $fileName,
				'content' => base64_encode($content),
			],
			'is_topic' => TRUE, // strictly speaking its not but this will help us with scoring
		]);
	}

}
