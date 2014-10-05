Nextras\StaticRouter
=====================

[![Build Status](https://travis-ci.org/nextras/static-router.svg?branch=master)](https://travis-ci.org/nextras/static-router)
[![Downloads this Month](https://img.shields.io/packagist/dm/nextras/static-router.svg)](https://packagist.org/packages/nextras/static-router)
[![Stable version](http://img.shields.io/packagist/v/nextras/static-router.svg)](https://packagist.org/packages/nextras/static-router)


### Installation

Add to your composer.json:

```
"require": {
	"nextras/static-router": "~1.0@dev"
}
```


### Example

```php
use Nextras\Routing\StaticRouter;

$router = new StaticRouter(['Homepage:default' => 'index.php'], StaticRouter::ONE_WAY);

$router = new StaticRouter([
	'Homepage:default' => '',
	'Auth:signIn' => 'sign-in',
	'Auth:signOut' => 'sign-out',
	'Auth:signUp' => 'sign-up',
]);
```
