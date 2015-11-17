<?php

/**
 * Class names updater for Nette 2.x
 */

if (@!include __DIR__ . '/vendor/autoload.php') {
	echo('Install packages using `composer install`');
	exit(1);
}


class ClassUpdater extends Nette\Object
{
	public $readOnly = FALSE;

	/** @var array */
	private $uses;

	/** @var array */
	private $newUses;

	/** @var string */
	private $namespace;

	/** @var string */
	private $fileName;

	/** @var array */
	private $found;

	/** @var array */
	private $replaces = [
		// nette 2.1
		'Nette\Config' => 'Nette\DI',
		'Nette\Utils\PhpGenerator' => 'Nette\PhpGenerator',
		'Nette\Database\Statement' => 'Nette\Database\ResultSet',
		'Nette\Diagnostics\Debugger::$blueScreen' => 'Tracy\Debugger::getBlueScreen()',
		'Nette\Diagnostics\Debugger::$bar' => 'Tracy\Debugger::getBar()',
		'Nette\Diagnostics\Debugger::$logger' => 'Tracy\Debugger::getLogger()',
		'Nette\Diagnostics\Debugger::$fireLogger' => 'Tracy\Debugger::getFireLogger()',

		// nette 2.2
		'Nette\Config\Configurator' => 'Nette\Configurator',
		'Nette\Http\User' => 'Nette\Security\User',
		'Nette\Templating\DefaultHelpers' => 'Nette\Templating\Helpers',
		'Nette\Templating\FilterException' => 'Latte\CompileException',
		'Nette\Diagnostics' => 'Tracy',
		'Nette\Latte' => 'Latte',
		'Nette\Latte\ParseException' => 'Latte\CompileException',
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
	];

	/** @var array */
	private $deprecated = [
		// nette 2.1
		'Nette\Diagnostics\Debugger::tryError' => FALSE,
		'Nette\Diagnostics\Debugger::catchError' => FALSE,
		'Nette\Diagnostics\Debugger::toStringException' => FALSE,
		'Nette\Diagnostics\Helpers::clickableDump' => FALSE,
		'Nette\Diagnostics\Helpers::htmlDump' => FALSE,
		'Nette\Loaders\AutoLoader' => FALSE,
		'Nette\Framework::$iAmUsingBadHost' => FALSE,

		// nette 2.2
		'Nette\Templating' => FALSE,
		'Nette\Utils\LimitedScope' => FALSE,
		'Nette\Caching\Storages\PhpFileStorage' => FALSE,
		'Nette\Utils\MimeTypeDetector' => FALSE,
	];



	public function run($folder)
	{
		set_time_limit(0);

		if ($this->readOnly) {
			echo "Running in read-only mode\n";
		}

		echo "Scanning folder $folder\n";

		$this->replaces = array_change_key_case($this->replaces);
		$this->deprecated = array_change_key_case($this->deprecated);


		$counter = 0;
		foreach (Nette\Utils\Finder::findFiles('*.php')->from($folder)
			->exclude(['.*', '*.tmp', 'tmp', 'temp', 'log']) as $file)
		{
			echo str_pad(str_repeat('.', $counter++ % 40), 40), "\x0D";

			$this->fileName = ltrim(str_replace($folder, '', $file), '/\\');

			$orig = file_get_contents($file);
			$new = $this->processFile($orig);
			if ($new !== $orig) {
				$this->report($this->readOnly ? 'FOUND' : 'FIXED', implode(', ', array_keys($this->found)));
				if (!$this->readOnly) {
					file_put_contents($file, $new);
				}
			}
		}

		echo "\nDone.";
	}



	public function report($level, $message = '')
	{
		echo "[$level] $this->fileName   $message\n";
	}



	public function processFile($input)
	{
		$this->namespace = $classLevel = $level = NULL;
		$this->uses = $this->newUses = $this->found = [];
		$tokens = new PhpTokens($input);

		while (($token = $tokens->nextValue()) !== NULL) {
			if ($tokens->isCurrent(T_NAMESPACE)) {
				$this->namespace = (string) $tokens->joinAll(T_STRING, T_NS_SEPARATOR);
				$this->uses = $this->newUses = [];

			} elseif ($tokens->isCurrent(T_USE)) {
				if ($classLevel || $tokens->isNext('(')) { // closure or trait?
					continue;
				}
				do {
					$tokens->nextAll(T_WHITESPACE, T_COMMENT);

					$pos = $tokens->position + 1;
					$class = ltrim($tokens->joinAll(T_STRING, T_NS_SEPARATOR), '\\');
					$tokens->replace($newClass = $this->rename($class, FALSE), $pos);

					if ($tokens->nextToken(T_AS)) {
						$as = $newAs = $tokens->nextValue(T_STRING);
					} else {
						$as = substr($class, strrpos("\\$class", '\\'));
						$newAs = substr($newClass, strrpos("\\$newClass", '\\'));
					}
					$this->uses[strtolower($as)] = $class;
					while (isset($this->newUses[strtolower($newAs)])) {
						$newAs .= '_';
						$tokens->replace("$class as $newAs", $pos);
					}
					$this->newUses[strtolower($newAs)] = [$newClass, $newAs];

				} while ($tokens->nextToken(','));

			} elseif ($tokens->isCurrent(T_INSTANCEOF, T_EXTENDS, T_IMPLEMENTS, T_NEW)) {
				do {
					$tokens->nextAll(T_WHITESPACE, T_COMMENT);
					$pos = $tokens->position + 1;
					if ($class = $tokens->joinAll(T_STRING, T_NS_SEPARATOR)) {
						$tokens->replace($this->rename($class), $pos);
					}
				} while ($class && $tokens->nextToken(','));

			} elseif ($tokens->isCurrent(T_STRING, T_NS_SEPARATOR)) {
				$pos = $tokens->position;
				$identifier = $token . $tokens->joinAll(T_STRING, T_NS_SEPARATOR);
				if ($tokens->nextToken(T_DOUBLE_COLON)) { // Class::
					$member = $tokens->nextValue(T_STRING, T_VARIABLE);
					$tokens->replace($this->rename("$identifier::$member"), $pos);

				} elseif ($tokens->isNext(T_VARIABLE)) { // typehint
					$tokens->replace($this->rename($identifier), $pos);
				}

			} elseif ($tokens->isCurrent(T_DOC_COMMENT, T_COMMENT)) {
				// @var Class or \Class or Nm\Class or Class:: (preserves CLASS)
				$tokens->replace(preg_replace_callback('#(@(?:var(?:\s+array of)?|returns?|param|throws|link|property[\w-]*)\s+)([\w\\\\|]+)#', function ($m) {
					$parts = [];
					foreach (explode('|', $m[2]) as $part) {
						$newClass = $this->rename($part, TRUE, $renamed);
						$parts[] = ($renamed || strpos($newClass, '\\') === FALSE) ? $newClass : $part;
					}
					return $m[1] . implode('|', $parts);
				}, $token));

			} elseif ($tokens->isCurrent(T_CONSTANT_ENCAPSED_STRING)) {
				if (preg_match('#(^.\\\\?)(Nette(?:\\\\{1,2}[A-Z]\w+)*)(:.*|.\z)#', $token, $m)) { // 'Nette\Object'
					$class = str_replace('\\\\', '\\', $m[2], $double);
					$class = $this->rename($class, FALSE);
					$tokens->replace($m[1] . str_replace('\\', $double ? '\\\\' : '\\', $class) . $m[3]);
				}

			} elseif ($tokens->isCurrent(T_OBJECT_OPERATOR)) {
				$pos = $tokens->position;
				$member = $tokens->nextValue(T_STRING);
				$s = strtolower('->' . $member . $tokens->nextValue('('));
				if (isset($this->deprecated[$s])) {
					$this->report('WARNING', "Found a possible deprecated member $member on line {$tokens->tokens[$pos]['line']}"
						. ($this->deprecated[$s] ? "; use {$this->deprecated[$s]} instead" : ''));
				}

			} elseif ($tokens->isCurrent(T_CLASS)) {
				$classLevel = $level + 1;

			} elseif ($tokens->isCurrent(T_CURLY_OPEN, T_DOLLAR_OPEN_CURLY_BRACES, '{')) {
				$level++;

			} elseif ($tokens->isCurrent('}')) {
				if ($level === $classLevel) {
					$classLevel = NULL;
				}
				$level--;
			}
		}

		return $tokens->reset()->joinAll();
	}



	/**
	 * @return string
	 */
	function rename($name, $useAliases = TRUE, & $renamed = FALSE)
	{
		@list($class, $member) = preg_split('#(?=::)#', $name);

		if (strtolower($class) === $class) { // i.e. parent, self, ''
			return $class . $member;
		}

		if ($useAliases) {
			$class = $this->resolveClass($class);
		}

		if (isset($this->deprecated[strtolower($class . $member)])) {
			$this->report('WARNING', "Found deprecated '$class$member'");

		} elseif (isset($this->deprecated[strtolower($class)])) {
			$this->report('WARNING', "Found deprecated class '$class'");

		} elseif (isset($this->replaces[strtolower($class . $member)])) {
			@list($class, $member) = preg_split('#(?=::)#', $this->replaces[strtolower($class . $member)]);
			$renamed = TRUE;

		} else {
			$parts = explode('\\', $class);
			$tail = '';
			while ($parts) {
				$begin = strtolower(implode('\\', $parts));
				if (isset($this->replaces[$begin])) {
					$newClass = $this->replaces[$begin] . $tail;
					$this->found["$class -> $newClass"] = TRUE;
					$class = $newClass;
					$renamed = TRUE;
					break;
				}
				$tail = '\\' . array_pop($parts) . $tail;
			}
		}

		if ($useAliases) {
			$class = $this->applyUse($class);
		}

		return $class . $member;
	}



	/**
	 * Apply use statements.
	 * @param  string
	 * @return string
	 */
	function applyUse($class)
	{
		$best = strncasecmp($class, "$this->namespace\\", strlen("$this->namespace\\")) === 0
			? substr($class, strlen($this->namespace) + 1)
			: ($this->namespace ? '\\' : '') . $class;

		foreach ($this->newUses as $item) {
			list($use, $as) = $item;
			if (strncasecmp("$class\\", "$use\\", strlen("$use\\")) === 0) {
				$new = substr_replace($class, $as, 0, strlen($use));
				if (strlen($new) <= strlen($best)) {
					$best = $new;
				}
			}
		}

		return $best;
	}



	/**
	 * Resolve use statements.
	 * @param  string
	 * @return string|NULL
	 */
	function resolveClass($class)
	{
		$segment = strtolower(substr($class, 0, strpos("$class\\", '\\')));
		if ($segment === '') {
			$full = $class;
		} elseif (isset($this->uses[$segment])) {
			$full = $this->uses[$segment] . substr($class, strlen($segment));
		} else {
			$full = $this->namespace . '\\' . $class;
		}
		return ltrim($full, '\\');
	}

}



/**
 * Simple tokenizer for PHP.
 */
class PhpTokens extends Nette\Utils\TokenIterator
{

	function __construct($code)
	{
		$this->ignored = [T_COMMENT, T_DOC_COMMENT, T_WHITESPACE];
		foreach (token_get_all($code) as $token) {
			$this->tokens[] = is_array($token) ? [$token[1], $token[2], $token[0]] : [$token];
		}
	}



	function replace($s, $start = NULL)
	{
		for ($i = ($start === NULL ? $this->position : $start); $i < $this->position; $i++) {
			$this->tokens[$i] = [''];
		}
		$this->tokens[$this->position] = [$s];
	}

}



$cmd = new Nette\CommandLine\Parser(<<<XX
Usage:
    php class-updater.php [options] [<path>]

Options:
    -f         fixes files


XX
, [
	'path' => [Nette\CommandLine\Parser::REALPATH => TRUE, Nette\CommandLine\Parser::VALUE => getcwd()],
]);

$options = $cmd->parse();
if ($cmd->isEmpty()) {
	$cmd->help();
}

$updater = new ClassUpdater;
$updater->readOnly = !$options['-f'];
$updater->run($options['path']);
