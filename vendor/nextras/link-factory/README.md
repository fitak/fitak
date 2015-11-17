Nextras\LinkFactory
===========

[![Build Status](https://travis-ci.org/nextras/link-factory.svg?branch=master)](https://travis-ci.org/nextras/link-factory)
[![Downloads this Month](https://img.shields.io/packagist/dm/nextras/link-factory.svg?style=flat)](https://packagist.org/packages/nextras/link-factory)
[![Stable version](http://img.shields.io/packagist/v/nextras/link-factory.svg?style=flat)](https://packagist.org/packages/nextras/link-factory)
[![HHVM Status](http://img.shields.io/hhvm/nextras/link-factory.svg?style=flat)](http://hhvm.h4cc.de/package/nextras/link-factory)


### Installation

Add to your composer.json:

```
"require": {
	"nextras/link-factory": "~1.0"
}
```


### Example

```php
use Nextras\Application\LinkFactory;

class Example
{
	/** @var LinkFactory */
	private $linkFactory;

	public function __construct(LinkFactory $linkFactory)
	{
		$this->linkFactory = $linkFactory;
	}

	public function doSomething()
	{
		// relative link with optional fragment (#comments) and parameters
		$link = $this->linkFactory->link('Products:view#comments', ['id' => 123]);

		// absolute link starts with '//'
		$link = $this->linkFactory->link('//Homepage:default');
	}
}
```
