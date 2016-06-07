<?php

/**
 * @testCase
 */

namespace Nextras\Application;

use Nette\Application\Request;
use Nette\Application\Routers\Route;
use Nette\Http\Url;
use Tester;
use Tester\Assert;
use Mockery;

require __DIR__ . '/../bootstrap.php';


class LinkFactoryTest extends Tester\TestCase
{

	/**
	 * @dataProvider provideLinkData
	 */
	public function testLink($dest, $destParams, $requestPresenter, $requestParams, $finalUrl)
	{
		$refUrl = new Url('http://example.com/basepath/');

		$appRequestMatcher = Mockery::on(function (Request $appRequest) use ($requestPresenter, $requestParams) {
			Assert::same($requestPresenter, $appRequest->getPresenterName());
			Assert::same($requestParams, $appRequest->getParameters());
			Assert::same('GET', $appRequest->getMethod());
			Assert::same(array(), $appRequest->getPost());
			Assert::same(array(), $appRequest->getFiles());
			return TRUE;
		});

		$router = Mockery::mock('Nette\Application\IRouter')
			->shouldReceive('constructUrl')->with($appRequestMatcher, $refUrl)
			->andReturnUsing(array(new Route('<presenter>[/<action>]'), 'constructUrl'))
			->getMock();

		$request = Mockery::mock('Nette\Http\IRequest')
			->shouldReceive('getUrl')->withNoArgs()
			->andReturn($refUrl)
			->getMock();

		$factory = new LinkFactory($router, $request);
		Assert::same($finalUrl, $factory->link($dest, $destParams));
	}


	public function provideLinkData()
	{
		return array(
			array(
				'Foo:bar', array('a' => 'b'),
				'Foo', array('a' => 'b', 'action' => 'bar'),
				'/basepath/foo/bar?a=b'
			),
			array(
				'//Foo:bar#lorem:ipsum', array('a' => 'b'),
				'Foo', array('a' => 'b', 'action' => 'bar'),
				'http://example.com/basepath/foo/bar?a=b#lorem:ipsum'
			),
			array(
				'Admin:Dashboard:default', array(),
				'Admin:Dashboard', array('action' => 'default'),
				'/basepath/admin.dashboard/default'
			),
			array(
				'Foo:', array(),
				'Foo', array(),
				'/basepath/foo',
			),
		);
	}


	public function testInvalidLink()
	{
		$refUrl = new Url('http://example.com/basepath/');

		$router = Mockery::mock('Nette\Application\IRouter')
			->shouldReceive('constructUrl')
			->andReturnNull()
			->getMock();

		$request = Mockery::mock('Nette\Http\IRequest')
			->shouldReceive('getUrl')
			->andReturn($refUrl)
			->getMock();

		Assert::exception(
			function () use ($router, $request) {
				$factory = new LinkFactory($router, $request);
				$factory->link('Homepage:default');
			},
			'Nextras\Application\InvalidLinkException',
			'Router failed to create link to \'Homepage:default\'.'
		);
	}

}

$test = new LinkFactoryTest;
$test->run();
