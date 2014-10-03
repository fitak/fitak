<?php

namespace Nextras\Application;

use Nette\Application\Request;
use Nette\Http\Url;
use Tester;
use Tester\Assert;
use Mockery;

require __DIR__ . '/../bootstrap.php';


class LinkFactoryTest extends Tester\TestCase
{
	public function testLink()
	{
		$url = new Url('proto://example.com/dir/');

		$router = Mockery::mock('Nette\Application\IRouter')
			->shouldReceive('constructUrl')->with(
				Mockery::on(function (Request $appRequest) {
					Assert::same('Foo', $appRequest->presenterName);
					Assert::equal(['action' => 'bar', 'a' => 'b'], $appRequest->parameters);
					return TRUE;
				}),
				$url
			)
			->andReturn('proto://example.com/dir/foo?a=b')
			->getMock();

		$request = Mockery::mock('Nette\Http\IRequest')
			->shouldReceive('getUrl')
			->andReturn($url)
			->getMock();

		$factory = new LinkFactory($router, $request);
		Assert::same('/dir/foo?a=b', $factory->link('Foo:bar', ['a' => 'b']));
		Assert::same('proto://example.com/dir/foo?a=b#anchor', $factory->link('//Foo:bar#anchor', ['a' => 'b']));
	}
}

(new LinkFactoryTest)->run();
