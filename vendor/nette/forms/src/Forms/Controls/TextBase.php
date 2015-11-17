<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Forms\Controls;

use Nette;
use Nette\Forms\Form;
use Nette\Utils\Strings;


/**
 * Implements the basic functionality common to text input controls.
 */
abstract class TextBase extends BaseControl
{
	/** @var string */
	protected $emptyValue = '';

	/** @var mixed unfiltered submitted value */
	protected $rawValue = '';


	/**
	 * Sets control's value.
	 * @param  string
	 * @return self
	 */
	public function setValue($value)
	{
		if ($value === NULL) {
			$value = '';
		} elseif (!is_scalar($value) && !method_exists($value, '__toString')) {
			throw new Nette\InvalidArgumentException(sprintf("Value must be scalar or NULL, %s given in field '%s'.", gettype($value), $this->name));
		}
		$this->rawValue = $this->value = $value;
		return $this;
	}


	/**
	 * Returns control's value.
	 * @return string
	 */
	public function getValue()
	{
		return $this->value === Strings::trim($this->translate($this->emptyValue)) ? '' : $this->value;
	}


	/**
	 * Sets the special value which is treated as empty string.
	 * @param  string
	 * @return self
	 */
	public function setEmptyValue($value)
	{
		$this->emptyValue = (string) $value;
		return $this;
	}


	/**
	 * Returns the special value which is treated as empty string.
	 * @return string
	 */
	public function getEmptyValue()
	{
		return $this->emptyValue;
	}


	/**
	 * Sets the maximum number of allowed characters.
	 * @param  int
	 * @return self
	 */
	public function setMaxLength($length)
	{
		$this->control->maxlength = $length;
		return $this;
	}


	/**
	 * Appends input string filter callback.
	 * @param  callable
	 * @return self
	 */
	public function addFilter($filter)
	{
		$this->rules->addFilter($filter);
		return $this;
	}


	public function getControl()
	{
		$el = parent::getControl();
		if ($this->emptyValue !== '') {
			$el->attrs['data-nette-empty-value'] = Strings::trim($this->translate($this->emptyValue));
		}
		if (isset($el->placeholder)) {
			$el->placeholder = $this->translate($el->placeholder);
		}
		return $el;
	}


	public function addRule($validator, $message = NULL, $arg = NULL)
	{
		if ($validator === Form::LENGTH || $validator === Form::MAX_LENGTH) {
			$tmp = is_array($arg) ? $arg[1] : $arg;
			if (is_scalar($tmp)) {
				$this->control->maxlength = isset($this->control->maxlength) ? min($this->control->maxlength, $tmp) : $tmp;
			}
		}
		return parent::addRule($validator, $message, $arg);
	}

}
