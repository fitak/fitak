<?php

namespace Fitak\Crawler;


class Edux
{

	const URL_LIST = 'https://edux.fit.cvut.cz/courses/';
	const URL_COURSE = 'https://edux.fit.cvut.cz/courses/%s/_export/xhtmlbody/%s';
	const URL_FILE = 'https://edux.fit.cvut.cz/courses/%s/%s';

	/**
	 * @var array [string => 1]
	 */
	protected $files;

	public function getCoursesUrls()
	{
		$html = $this->makeRequest(self::URL_LIST);
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
			echo "   $part ($url)\n";

			$pages = $this->processPage($course, $url);
			$new = array_diff_key($pages, $processed);
			$list = array_merge($list, $new);

			echo "  $url\n";
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
		$html = $this->makeRequest($url);

		// TODO Process links to materials

		$matches = [];
		preg_match_all('~href="/courses/' . preg_quote($course, '~') . '/+((?!(/?en|lib|_?export))[^"#?]+)~i', $html, $matches);

		$new = [];
		foreach ($matches[1] as $match)
		{
			// TODO all supported Tika extensions
			if (strToLower(substr($match, -4)) === '.pdf')
			{
				// TODO make it event
				$this->addFile($course, $match);
			}
			else
			{
				// links to parse
				$new[$match] = 1;
			}
		}
		return $new;
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
		return file_get_contents($url, FALSE, $context);
	}

	private function addFile($course, $file)
	{
		$this->files[$course][$file] = 1;
	}

	public function processFiles()
	{
		foreach ($this->files as $course => $files)
		{
			foreach ($files as $file => $tmp)
			{
				$this->processFile($course, $file);
			}
		}
	}

	public function processFile($course, $file)
	{
		$url = sprintf(self::URL_FILE, $course, $file);
		$content = base64_encode($this->makeRequest($url));

		$this->elastic->addFileToIndex($url, $content);
	}

}
