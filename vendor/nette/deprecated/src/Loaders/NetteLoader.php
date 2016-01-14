<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Loaders;

use Nette;


/**
 * Nette auto loader is responsible for loading Nette classes and interfaces.
 */
class NetteLoader
{
	/** @var NetteLoader */
	private static $instance;

	/** @var array */
	public $renamed = array(
		'Nette\Config\Configurator' => 'Nette\Configurator',
		'Nette\Config\CompilerExtension' => 'Nette\DI\CompilerExtension',
		'Nette\Http\User' => 'Nette\Security\User',
		'Nette\Templating\DefaultHelpers' => 'Nette\Templating\Helpers',
		'Nette\Templating\FilterException' => 'Latte\CompileException',
		'Nette\Utils\PhpGenerator\ClassType' => 'Nette\PhpGenerator\ClassType',
		'Nette\Utils\PhpGenerator\Helpers' => 'Nette\PhpGenerator\Helpers',
		'Nette\Utils\PhpGenerator\Method' => 'Nette\PhpGenerator\Method',
		'Nette\Utils\PhpGenerator\Parameter' => 'Nette\PhpGenerator\Parameter',
		'Nette\Utils\PhpGenerator\PhpLiteral' => 'Nette\PhpGenerator\PhpLiteral',
		'Nette\Utils\PhpGenerator\Property' => 'Nette\PhpGenerator\Property',
		'Nette\Diagnostics\Bar' => 'Tracy\Bar',
		'Nette\Diagnostics\BlueScreen' => 'Tracy\BlueScreen',
		'Nette\Diagnostics\DefaultBarPanel' => 'Tracy\DefaultBarPanel',
		'Nette\Diagnostics\Dumper' => 'Tracy\Dumper',
		'Nette\Diagnostics\FireLogger' => 'Tracy\FireLogger',
		'Nette\Diagnostics\Logger' => 'Tracy\Logger',
		'Nette\Diagnostics\OutputDebugger' => 'Tracy\OutputDebugger',
		'Nette\Latte\ParseException' => 'Latte\CompileException',
		'Nette\Latte\CompileException' => 'Latte\CompileException',
		'Nette\Latte\Compiler' => 'Latte\Compiler',
		'Nette\Latte\HtmlNode' => 'Latte\HtmlNode',
		'Nette\Latte\IMacro' => 'Latte\IMacro',
		'Nette\Latte\MacroNode' => 'Latte\MacroNode',
		'Nette\Latte\MacroTokens' => 'Latte\MacroTokens',
		'Nette\Latte\Parser' => 'Latte\Parser',
		'Nette\Latte\PhpWriter' => 'Latte\PhpWriter',
		'Nette\Latte\Token' => 'Latte\Token',
		'Nette\Latte\Macros\CoreMacros' => 'Latte\Macros\CoreMacros',
		'Nette\Latte\Macros\MacroSet' => 'Latte\Macros\MacroSet',
		'Nette\Latte\Macros\CacheMacro' => 'Nette\Bridges\CacheLatte\CacheMacro',
		'Nette\Latte\Macros\FormMacros' => 'Nette\Bridges\FormsLatte\FormMacros',
		'Nette\Latte\Macros\UIMacros' => 'Nette\Bridges\ApplicationLatte\UIMacros',
		'Nette\ArrayHash' => 'Nette\Utils\ArrayHash',
		'Nette\ArrayList' => 'Nette\Utils\ArrayList',
		'Nette\DateTime' => 'Nette\Utils\DateTime',
		'Nette\Image' => 'Nette\Utils\Image',
		'Nette\ObjectMixin' => 'Nette\Utils\ObjectMixin',
		'Nette\Utils\NeonException' => 'Nette\Neon\Exception',
		'Nette\Utils\NeonEntity' => 'Nette\Neon\Entity',
		'Nette\Utils\Neon' => 'Nette\Neon\Neon',
	);

	/** @var array */
	public $list = array();


	/**
	 * Returns singleton instance with lazy instantiation.
	 * @return NetteLoader
	 */
	public static function getInstance()
	{
		if (self::$instance === NULL) {
			self::$instance = new static;
		}
		return self::$instance;
	}


	/**
	 * Register autoloader.
	 * @param  bool  prepend autoloader?
	 * @return void
	 */
	public function register($prepend = FALSE)
	{
		spl_autoload_register(array($this, 'tryLoad'), TRUE, (bool) $prepend);
	}


	/**
	 * Handles autoloading of classes or interfaces.
	 * @param  string
	 * @return void
	 */
	public function tryLoad($type)
	{
		$type = ltrim($type, '\\');
		if (isset($this->renamed[$type])) {
			class_alias($this->renamed[$type], $type);
			trigger_error("Class $type has been renamed to {$this->renamed[$type]}.", E_USER_WARNING);

		} elseif (isset($this->list[$type])) {
			require __DIR__ . '/../' . $this->list[$type] . '.php';

		} elseif (substr($type, 0, 6) === 'Nette\\' && is_file($file = __DIR__ . '/../' . strtr(substr($type, 5), '\\', '/') . '.php')) {
			require $file;
		}
	}

}
