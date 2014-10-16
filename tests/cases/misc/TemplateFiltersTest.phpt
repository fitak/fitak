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
	public function testUrlsToLinks($expected, $input)
	{
		Assert::same($expected, $this->templateFilters->urlsToLinks($input));
	}

	public function getUrlsToLinksData()
	{
		return [
			['simple', 'simple'],
			['<html>', '<html>'],
			['<a href="http://example.com" title="http://example.com">example.com</a>', 'http://example.com'],
			['<a href="http://example.com/very-long-url-very-long-url" title="http://example.com/very-long-url-very-long-url">example.com...</a>', 'http://example.com/very-long-url-very-long-url'],
			['<a href="http://example.com/aaa/bbb/ccc/ddd/eee/fff/ggg" title="http://example.com/aaa/bbb/ccc/ddd/eee/fff/ggg">example.com/aaa/bbb/ccc/ddd/eee...</a>', 'http://example.com/aaa/bbb/ccc/ddd/eee/fff/ggg'],
		];
	}

}

(new TemplateFiltersTest())->run();
