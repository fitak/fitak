<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Forms\Controls;

use Nette;
use Nette\Forms\Form;


/**
 * Single line text input control.
 */
class TextInput extends TextBase
{

	/**
	 * @param  string  label
	 * @param  int  maximum number of characters the user may enter
	 */
	public function __construct($label = NULL, $maxLength = NULL)
	{
		parent::__construct($label);
		$this->control->type = 'text';
		$this->control->maxlength = $maxLength;
	}


	/**
	 * Loads HTTP data.
	 * @return void
	 */
	public function loadHttpData()
	{
		$this->setValue($this->getHttpData(Form::DATA_LINE));
	}


	/**
	 * Changes control's type attribute.
	 * @param  string
	 * @return self
	 */
	public function setType($type)
	{
		$this->control->type = $type;
		return $this;
	}


	/**
	 * Generates control's HTML element.
	 * @return Nette\Utils\Html
	 */
	public function getControl()
	{
		$input = parent::getControl();

		foreach ($this->getRules() as $rule) {
			if ($rule->isNegative || $rule->branch) {

			} elseif (in_array($rule->validator, array(Form::MIN, Form::MAX, Form::RANGE), TRUE)
				&& in_array($input->type, array('number', 'range', 'datetime-local', 'datetime', 'date', 'month', 'week', 'time'), TRUE)
			) {
				if ($rule->validator === Form::MIN) {
					$range = array($rule->arg, NULL);
				} elseif ($rule->validator === Form::MAX) {
					$range = array(NULL, $rule->arg);
				} else {
					$range = $rule->arg;
				}
				if (isset($range[0]) && is_scalar($range[0])) {
					$input->min = isset($input->min) ? max($input->min, $range[0]) : $range[0];
				}
				if (isset($range[1]) && is_scalar($range[1])) {
					$input->max = isset($input->max) ? min($input->max, $range[1]) : $range[1];
				}

			} elseif ($rule->validator === Form::PATTERN && is_scalar($rule->arg)
				&& in_array($input->type, array('text', 'search', 'tel', 'url', 'email', 'password'), TRUE)
			) {
				$input->pattern = $rule->arg;
			}
		}

		if ($input->type !== 'password' && ($this->rawValue !== '' || $this->emptyValue !== '')) {
			$input->value = $this->rawValue === ''
				? $this->translate($this->emptyValue)
				: $this->rawValue;
		}
		return $input;
	}

}
