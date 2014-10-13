Kdyby/CurlCaBundle
==================

This package provides root certificates for usage in api clients on systems that have missing or outdated certificates.

This library is rebuild automatically every day using http://curl.haxx.se/docs/caextract.html

If there is a change in the file, it's committed and pushed, so you can download a new one.


Requirements
------------

Kdyby/CurlCaBundle requires PHP 5.2 or higher with cUrl extension enabled.


Installation
------------

The best way to install Kdyby/CurlCaBundle is using  [Composer](http://getcomposer.org/):

```sh
$ composer require kdyby/curl-ca-bundle:~1.0
```


Usage
-----

Simply apply the function `Kdyby\CurlCaBundle\CertificateHelper::setCurlCaInfo()` to your cURL resource.

```php
$curl = curl_init("https://www.kdyby.org/");
\Kdyby\CurlCaBundle\CertificateHelper::setCurlCaInfo($curl);
$result = curl_exec($curl);
```

There is also a function that only returns the ca-bundle filename, if you wanna set the option yourself.

```php
$curl = curl_init("https://www.kdyby.org/");
curl_setopt($curl, CURLOPT_CAINFO, \Kdyby\CurlCaBundle\CertificateHelper::getCaInfoFile());
$result = curl_exec($curl);
```

And that's all folks!


-----

Homepage [http://www.kdyby.org](http://www.kdyby.org) and repository [http://github.com/Kdyby/CurlCaBundle](http://github.com/Kdyby/CurlCaBundle).
