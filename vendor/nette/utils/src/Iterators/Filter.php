<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Iterators;

use Nette;


/**
 * CallbackFilterIterator for PHP < 5.4.
 */
class Filter extends \FilterIterator
{
	/** @var callable */
	protected $callback;


	public function __construct(\Iterator $iterator, $callback)
	{
		parent::__construct($iterator);
		$this->callback = Nette\Utils\Callback::check($callback);
	}


	public function accept()
	{
		return call_user_func($this->callback, $this->current(), $this->key(), $this);
	}

}
