<?php

namespace Fitak;

use Mockery;
use Tester;
use Tester\Assert;

require __DIR__ . '/../../bootstrap.php';

/**
 * @testCase
 */
class TemplateFiltersTest extends Tester\TestCase
{

	/** @var TemplateFilters */
	private $templateFilters;

	protected function setUp()
	{
		parent::setUp();
		$highlighter = Mockery::mock(\Highlighter::class);
		$this->templateFilters = new TemplateFilters($highlighter);
	}

	/**
	 * @dataProvider getUrlsToLinksData
	 */
	public function testUrlsToLinks($input, $expected)
	{
		Assert::same($expected, $this->templateFilters->urlsToLinks($input));
	}

	public function getUrlsToLinksData()
	{
		$hellip = "\xe2\x80\xa6";
		return [
			[
				'simple',
				'simple',
			],
			[
				'<html>',
				'<html>',
			],
			[
				'http://example.com',
				"<a href=\"http://example.com\" title=\"http://example.com\">example.com</a>",
			],
			[
				'aaa http://example.com bbb',
				"aaa <a href=\"http://example.com\" title=\"http://example.com\">example.com</a> bbb",
			],
			[
				'http://example.com/very-long-url-very-long-url',
				"<a href=\"http://example.com/very-long-url-very-long-url\" title=\"http://example.com/very-long-url-very-long-url\">example.com/{$hellip}ery-long-url</a>",
			],
			[
				'http://example.com/aaa/bbb/ccc/ddd/eee/fff/ggg',
				"<a href=\"http://example.com/aaa/bbb/ccc/ddd/eee/fff/ggg\" title=\"http://example.com/aaa/bbb/ccc/ddd/eee/fff/ggg\">example.com/{$hellip}/eee/fff/ggg</a>",
			],
			[
				'http://cs.wikipedia.org/wiki/Třešeň',
				"<a href=\"http://cs.wikipedia.org/wiki/Třešeň\" title=\"http://cs.wikipedia.org/wiki/Třešeň\">cs.wikipedia.org/wiki/Třešeň</a>",
			],
		];
	}

}

(new TemplateFiltersTest())->run();
