<?php

namespace Fitak;

use Latte;
use Latte\MacroNode;
use Latte\Macros\MacroSet;
use Latte\PhpWriter;
use Nette;
use Nette\Http;


class TemplateMacros extends MacroSet
{

	/** @var Http\IRequest */
	private $httpRequest;

	/** @var bool */
	private $productionMode;

	/** @var string */
	private $assetsHashPath;

	/** @var array (resourceName => hash) */
	private $resourceHashes;

	/**
	 * @param Latte\Compiler $compiler
	 * @param Http\IRequest  $httpRequest    current HTTP request, used for obtaining basePath
	 * @param bool           $productionMode
	 * @param string         $assetsHashPath path to file 'hash.txt' generated build gulp
	 */
	public function __construct(Latte\Compiler $compiler, Http\IRequest $httpRequest, $productionMode, $assetsHashPath)
	{
		parent::__construct($compiler);
		$this->httpRequest = $httpRequest;
		$this->productionMode = $productionMode;
		$this->assetsHashPath = $assetsHashPath;
	}

	public function register()
	{
		$this->addMacro('asset', [$this, 'macroAsset']);
	}

	/**
	 * Usage: <script src="{asset compiled.js}"></script>
	 * This macro is based on macroResource developed by Jan Skrasek for signaly.cz
	 */
	public function macroAsset(MacroNode $node, PhpWriter $writer)
	{
		$word = $node->tokenizer->fetchWord();
		$basePath = preg_replace('#https?://[^/]+#A', '', rtrim($this->httpRequest->getUrl()->getBaseUrl(), '/'));

		if ($this->productionMode)
		{
			if ($this->resourceHashes === NULL)
			{
				if (!is_file($this->assetsHashPath))
				{
					throw new InvalidStateException('Missing file ' . $this->assetsHashPath);
				}

				$this->resourceHashes = [];
				$lines = file($this->assetsHashPath);
				foreach ($lines as $line)
				{
					list($file, $hash) = explode(' ', trim($line));
					$this->resourceHashes[basename($file)] = substr($hash, 0, 8);
				}
			}

			$hash = $this->resourceHashes[$word];
			$url = $basePath . '/build/' . $hash . '-' . $word;
		}
		else
		{
			$url = $basePath . '/build/' . $word;
		}

		return $writer->write('echo %escape(%var)', $url);
	}

}

interface ITemplateMacrosFactory
{

	/**
	 * @return TemplateMacros
	 */
	public function create(Latte\Compiler $compiler);

}
