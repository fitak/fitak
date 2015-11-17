<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 * Copyright (c) 2004 David Grudl (http://davidgrudl.com)
 */

namespace Nette\Loaders;

use Nette;
use Nette\Caching\Cache;
use SplFileInfo;


/**
 * Nette auto loader is responsible for loading classes and interfaces.
 *
 * @property-read array $indexedClasses
 * @property   Nette\Caching\IStorage $cacheStorage
 */
class RobotLoader extends Nette\Object
{
	const RETRY_LIMIT = 3;

	/** @var string|array  comma separated wildcards */
	public $ignoreDirs = '.*, *.old, *.bak, *.tmp, temp';

	/** @var string|array  comma separated wildcards */
	public $acceptFiles = '*.php, *.php5';

	/** @var bool */
	public $autoRebuild = TRUE;

	/** @var array */
	private $scanPaths = array();

	/** @var array of lowered-class => [file, time, orig] or num-of-retry */
	private $classes = array();

	/** @var bool */
	private $rebuilt = FALSE;

	/** @var array of missing classes in this request */
	private $missing = array();

	/** @var Nette\Caching\IStorage */
	private $cacheStorage;


	public function __construct()
	{
		if (!extension_loaded('tokenizer')) {
			throw new Nette\NotSupportedException('PHP extension Tokenizer is not loaded.');
		}
	}


	/**
	 * Register autoloader.
	 * @param  bool  prepend autoloader?
	 * @return self
	 */
	public function register($prepend = FALSE)
	{
		$this->classes = $this->getCache()->load($this->getKey(), array($this, 'rebuildCallback'));
		spl_autoload_register(array($this, 'tryLoad'), TRUE, (bool) $prepend);
		return $this;
	}


	/**
	 * Handles autoloading of classes, interfaces or traits.
	 * @param  string
	 * @return void
	 */
	public function tryLoad($type)
	{
		$type = $orig = ltrim($type, '\\'); // PHP namespace bug #49143
		$type = strtolower($type);

		$info = & $this->classes[$type];
		if (isset($this->missing[$type]) || (is_int($info) && $info >= self::RETRY_LIMIT)) {
			return;
		}

		if ($this->autoRebuild) {
			if (!is_array($info) || !is_file($info['file'])) {
				$info = is_int($info) ? $info + 1 : 0;
				if ($this->rebuilt) {
					$this->getCache()->save($this->getKey(), $this->classes);
				} else {
					$this->rebuild();
				}
			} elseif (!$this->rebuilt && filemtime($info['file']) !== $info['time']) {
				$this->updateFile($info['file']);
				if (!isset($this->classes[$type])) {
					$this->classes[$type] = 0;
				}
				$this->getCache()->save($this->getKey(), $this->classes);
			}
		}

		if (isset($this->classes[$type]['file'])) {
			if ($this->classes[$type]['orig'] !== $orig) {
				trigger_error("Case mismatch on class name '$orig', correct name is '{$this->classes[$type]['orig']}'.", E_USER_WARNING);
			}
			call_user_func(function ($file) { require $file; }, $this->classes[$type]['file']);
		} else {
			$this->missing[$type] = TRUE;
		}
	}


	/**
	 * Add path or paths to list.
	 * @param  string|string[]  absolute path
	 * @return self
	 */
	public function addDirectory($path)
	{
		$this->scanPaths = array_merge($this->scanPaths, (array) $path);
		return $this;
	}


	/**
	 * @return array of class => filename
	 */
	public function getIndexedClasses()
	{
		$res = array();
		foreach ($this->classes as $info) {
			if (is_array($info)) {
				$res[$info['orig']] = $info['file'];
			}
		}
		return $res;
	}


	/**
	 * Rebuilds class list cache.
	 * @return void
	 */
	public function rebuild()
	{
		$this->rebuilt = TRUE; // prevents calling rebuild() or updateFile() in tryLoad()
		$this->getCache()->save($this->getKey(), Nette\Utils\Callback::closure($this, 'rebuildCallback'));
	}


	/**
	 * @internal
	 */
	public function rebuildCallback()
	{
		$files = $missing = array();
		foreach ($this->classes as $class => $info) {
			if (is_array($info)) {
				$files[$info['file']]['time'] = $info['time'];
				$files[$info['file']]['classes'][] = $info['orig'];
			} else {
				$missing[$class] = $info;
			}
		}

		$this->classes = array();
		foreach ($this->scanPaths as $path) {
			foreach (is_file($path) ? array(new SplFileInfo($path)) : $this->createFileIterator($path) as $file) {
				$file = $file->getPathname();
				if (isset($files[$file]) && $files[$file]['time'] == filemtime($file)) {
					$classes = $files[$file]['classes'];
				} else {
					$classes = $this->scanPhp(file_get_contents($file));
				}
				$files[$file] = array('classes' => array(), 'time' => filemtime($file));

				foreach ($classes as $class) {
					$info = & $this->classes[strtolower($class)];
					if (isset($info['file'])) {
						throw new Nette\InvalidStateException("Ambiguous class $class resolution; defined in {$info['file']} and in $file.");
					}
					$info = array('file' => $file, 'time' => filemtime($file), 'orig' => $class);
				}
			}
		}
		$this->classes += $missing;
		return $this->classes;
	}


	/**
	 * Creates an iterator scaning directory for PHP files, subdirectories and 'netterobots.txt' files.
	 * @return \Iterator
	 * @throws Nette\IOException if path is not found
	 */
	private function createFileIterator($dir)
	{
		if (!is_dir($dir)) {
			throw new Nette\IOException("File or directory '$dir' not found.");
		}

		$ignoreDirs = is_array($this->ignoreDirs) ? $this->ignoreDirs : preg_split('#[,\s]+#', $this->ignoreDirs);
		$disallow = array();
		foreach ($ignoreDirs as $item) {
			if ($item = realpath($item)) {
				$disallow[$item] = TRUE;
			}
		}

		$iterator = Nette\Utils\Finder::findFiles(is_array($this->acceptFiles) ? $this->acceptFiles : preg_split('#[,\s]+#', $this->acceptFiles))
			->filter(function (SplFileInfo $file) use (& $disallow) {
				return !isset($disallow[$file->getPathname()]);
			})
			->from($dir)
			->exclude($ignoreDirs)
			->filter($filter = function (SplFileInfo $dir) use (& $disallow) {
				$path = $dir->getPathname();
				if (is_file("$path/netterobots.txt")) {
					foreach (file("$path/netterobots.txt") as $s) {
						if (preg_match('#^(?:disallow\\s*:)?\\s*(\\S+)#i', $s, $matches)) {
							$disallow[$path . str_replace('/', DIRECTORY_SEPARATOR, rtrim('/' . ltrim($matches[1], '/'), '/'))] = TRUE;
						}
					}
				}
				return !isset($disallow[$path]);
			});

		$filter(new SplFileInfo($dir));
		return $iterator;
	}


	/**
	 * @return void
	 */
	private function updateFile($file)
	{
		foreach ($this->classes as $class => $info) {
			if (isset($info['file']) && $info['file'] === $file) {
				unset($this->classes[$class]);
			}
		}

		if (is_file($file)) {
			foreach ($this->scanPhp(file_get_contents($file)) as $class) {
				$info = & $this->classes[strtolower($class)];
				if (isset($info['file']) && @filemtime($info['file']) !== $info['time']) { // intentionally ==, file may not exists
					$this->updateFile($info['file']);
					$info = & $this->classes[strtolower($class)];
				}
				if (isset($info['file'])) {
					throw new Nette\InvalidStateException("Ambiguous class $class resolution; defined in {$info['file']} and in $file.");
				}
				$info = array('file' => $file, 'time' => filemtime($file), 'orig' => $class);
			}
		}
	}


	/**
	 * Searches classes, interfaces and traits in PHP file.
	 * @param  string
	 * @return array
	 */
	private function scanPhp($code)
	{
		$T_TRAIT = PHP_VERSION_ID < 50400 ? -1 : T_TRAIT;

		$expected = FALSE;
		$namespace = '';
		$level = $minLevel = 0;
		$classes = array();

		if (preg_match('#//nette'.'loader=(\S*)#', $code, $matches)) {
			foreach (explode(',', $matches[1]) as $name) {
				$classes[] = $name;
			}
			return $classes;
		}

		foreach (@token_get_all($code) as $token) { // intentionally @
			if (is_array($token)) {
				switch ($token[0]) {
					case T_COMMENT:
					case T_DOC_COMMENT:
					case T_WHITESPACE:
						continue 2;

					case T_NS_SEPARATOR:
					case T_STRING:
						if ($expected) {
							$name .= $token[1];
						}
						continue 2;

					case T_NAMESPACE:
					case T_CLASS:
					case T_INTERFACE:
					case $T_TRAIT:
						$expected = $token[0];
						$name = '';
						continue 2;
					case T_CURLY_OPEN:
					case T_DOLLAR_OPEN_CURLY_BRACES:
						$level++;
				}
			}

			if ($expected) {
				switch ($expected) {
					case T_CLASS:
					case T_INTERFACE:
					case $T_TRAIT:
						if ($name && $level === $minLevel) {
							$classes[] = $namespace . $name;
						}
						break;

					case T_NAMESPACE:
						$namespace = $name ? $name . '\\' : '';
						$minLevel = $token === '{' ? 1 : 0;
				}

				$expected = NULL;
			}

			if ($token === '{') {
				$level++;
			} elseif ($token === '}') {
				$level--;
			}
		}
		return $classes;
	}


	/********************* backend ****************d*g**/


	/**
	 * @return RobotLoader
	 */
	public function setCacheStorage(Nette\Caching\IStorage $storage)
	{
		$this->cacheStorage = $storage;
		return $this;
	}


	/**
	 * @return Nette\Caching\IStorage
	 */
	public function getCacheStorage()
	{
		return $this->cacheStorage;
	}


	/**
	 * @return Nette\Caching\Cache
	 */
	protected function getCache()
	{
		if (!$this->cacheStorage) {
			trigger_error('Missing cache storage.', E_USER_WARNING);
			$this->cacheStorage = new Nette\Caching\Storages\DevNullStorage;
		}
		return new Cache($this->cacheStorage, 'Nette.RobotLoader');
	}


	/**
	 * @return string
	 */
	protected function getKey()
	{
		return array($this->ignoreDirs, $this->acceptFiles, $this->scanPaths);
	}

}
