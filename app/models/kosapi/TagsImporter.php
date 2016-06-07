<?php

namespace Fitak;

use Nette;
use Nette\Utils\Strings;
use SimpleXMLElement;


class TagsImporter extends Nette\Object
{

	/** @var Orm */
	private $orm;

	/** @var KosApi */
	private $kosApi;

	public function __construct(Orm $orm, KosApi $kosApi)
	{
		$this->orm = $orm;
		$this->kosApi = $kosApi;
	}

	/**
	 * Set's user's favorite tags based on this enrolled courses. Does not persist the user entity.
	 *
	 * @param  User   $user
	 * @param  string $semester one of KosApi::SEMESTER_*
	 * @return Tag[]
	 * @throws IOException
	 */
	public function importTags(User $user, $semester = KosApi::SEMESTER_CURRENT)
	{
		$kosUsername = $user->getKosUsername();
		if ($kosUsername)
		{
			$courses = $this->getEnrolledCourses($kosUsername, $semester);
			$tags = $this->getTags($courses);
			$tags = $this->orm->tags->findByName($tags)->fetchAll();
			$user->favoriteTags->set($tags);
			return $tags;
		}
		else
		{
			return [];
		}
	}

	/**
	 * Returns tags corresponding to given courses.
	 *
	 * @param  string[] $courses
	 * @return string[]
	 */
	private function getTags(array $courses)
	{
		$tags = [];
		foreach ($courses as $course)
		{
			if ($match = Strings::match($course, '#^(?:bi|mi)-([a-z]+)(?:\.\d+)?$#i'))
			{
				$tags[] = strtolower($match[1]);
			}
		}
		return $tags;
	}

	/**
	 * Returns list of enrolled courses by given student in given semester.
	 *
	 * @param  string $username
	 * @param  string $semester one of KosApi::SEMESTER_*
	 * @return string[]
	 * @throws IOException
	 */
	private function getEnrolledCourses($username, $semester)
	{
		try
		{
			$xml = $this->kosApi->sendRequest('/students/:username/enrolledCourses', [
				'username' => $username,
				'sem' => $semester,
				'lang' => 'cs',
				'fields' => 'entry(content(course))',
				'limit' => 100,
			]);
		}
		catch (HttpException $e)
		{
			if ($e->getCode() === 404)
			{
				return []; // silently suppress
			}
			else
			{
				throw $e;
			}
		}

		return array_map(
			function (SimpleXMLElement $content) {
				return $this->kosApi->getResourceCode($content->course[0]);
			},
			$xml->xpath('//atom:content')
		);
	}

}
