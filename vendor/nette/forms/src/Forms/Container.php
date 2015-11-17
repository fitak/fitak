<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

namespace Nette\Forms;

use Nette;


/**
 * Container for form controls.
 *
 * @property   Nette\Utils\ArrayHash $values
 * @property-read \ArrayIterator $controls
 * @property-read Form $form
 */
class Container extends Nette\ComponentModel\Container implements \ArrayAccess
{
	/** @var callable[]  function (Container $sender); Occurs when the form is validated */
	public $onValidate;

	/** @var ControlGroup */
	protected $currentGroup;

	/** @var bool */
	private $validated;


	/********************* data exchange ****************d*g**/


	/**
	 * Fill-in with default values.
	 * @param  array|\Traversable  values used to fill the form
	 * @param  bool     erase other default values?
	 * @return self
	 */
	public function setDefaults($values, $erase = FALSE)
	{
		$form = $this->getForm(FALSE);
		if (!$form || !$form->isAnchored() || !$form->isSubmitted()) {
			$this->setValues($values, $erase);
		}
		return $this;
	}


	/**
	 * Fill-in with values.
	 * @param  array|\Traversable  values used to fill the form
	 * @param  bool     erase other controls?
	 * @return self
	 */
	public function setValues($values, $erase = FALSE)
	{
		if ($values instanceof \Traversable) {
			$values = iterator_to_array($values);

		} elseif (!is_array($values)) {
			throw new Nette\InvalidArgumentException(sprintf('First parameter must be an array, %s given.', gettype($values)));
		}

		foreach ($this->getComponents() as $name => $control) {
			if ($control instanceof IControl) {
				if (array_key_exists($name, $values)) {
					$control->setValue($values[$name]);

				} elseif ($erase) {
					$control->setValue(NULL);
				}

			} elseif ($control instanceof self) {
				if (array_key_exists($name, $values)) {
					$control->setValues($values[$name], $erase);

				} elseif ($erase) {
					$control->setValues(array(), $erase);
				}
			}
		}
		return $this;
	}


	/**
	 * Returns the values submitted by the form.
	 * @param  bool  return values as an array?
	 * @return Nette\Utils\ArrayHash|array
	 */
	public function getValues($asArray = FALSE)
	{
		$values = $asArray ? array() : new Nette\Utils\ArrayHash;
		foreach ($this->getComponents() as $name => $control) {
			if ($control instanceof IControl && !$control->isOmitted()) {
				$values[$name] = $control->getValue();

			} elseif ($control instanceof self) {
				$values[$name] = $control->getValues($asArray);
			}
		}
		return $values;
	}


	/********************* validation ****************d*g**/


	/**
	 * Is form valid?
	 * @return bool
	 */
	public function isValid()
	{
		if (!$this->validated) {
			if ($this->getErrors()) {
				return FALSE;
			}
			$this->validate();
		}
		return !$this->getErrors();
	}


	/**
	 * Performs the server side validation.
	 * @param  IControl[]
	 * @return void
	 */
	public function validate(array $controls = NULL)
	{
		foreach ($controls === NULL ? $this->getComponents() : $controls as $control) {
			$control->validate();
		}
		if ($this->onValidate !== NULL) {
			if (!is_array($this->onValidate) && !$this->onValidate instanceof \Traversable) {
				throw new Nette\UnexpectedValueException('Property Form::$onValidate must be array or Traversable, ' . gettype($this->onValidate) . ' given.');
			}
			foreach ($this->onValidate as $handler) {
				$params = Nette\Utils\Callback::toReflection($handler)->getParameters();
				$values = isset($params[1]) ? $this->getValues($params[1]->isArray()) : NULL;
				Nette\Utils\Callback::invoke($handler, $this, $values);
			}
		}
		$this->validated = TRUE;
	}


	/**
	 * Returns all validation errors.
	 * @return array
	 */
	public function getErrors()
	{
		$errors = array();
		foreach ($this->getControls() as $control) {
			$errors = array_merge($errors, $control->getErrors());
		}
		return array_unique($errors);
	}


	/********************* form building ****************d*g**/


	/**
	 * @return self
	 */
	public function setCurrentGroup(ControlGroup $group = NULL)
	{
		$this->currentGroup = $group;
		return $this;
	}


	/**
	 * Returns current group.
	 * @return ControlGroup
	 */
	public function getCurrentGroup()
	{
		return $this->currentGroup;
	}


	/**
	 * Adds the specified component to the IContainer.
	 * @param  Nette\ComponentModel\IComponent
	 * @param  string
	 * @param  string
	 * @return self
	 * @throws Nette\InvalidStateException
	 */
	public function addComponent(Nette\ComponentModel\IComponent $component, $name, $insertBefore = NULL)
	{
		parent::addComponent($component, $name, $insertBefore);
		if ($this->currentGroup !== NULL && $component instanceof IControl) {
			$this->currentGroup->add($component);
		}
		return $this;
	}


	/**
	 * Iterates over all form controls.
	 * @return \ArrayIterator
	 */
	public function getControls()
	{
		return $this->getComponents(TRUE, 'Nette\Forms\IControl');
	}


	/**
	 * Returns form.
	 * @param  bool   throw exception if form doesn't exist?
	 * @return Form
	 */
	public function getForm($need = TRUE)
	{
		return $this->lookup('Nette\Forms\Form', $need);
	}


	/********************* control factories ****************d*g**/


	/**
	 * Adds single-line text input control to the form.
	 * @param  string  control name
	 * @param  string  label
	 * @param  int  width of the control (deprecated)
	 * @param  int  maximum number of characters the user may enter
	 * @return Nette\Forms\Controls\TextInput
	 */
	public function addText($name, $label = NULL, $cols = NULL, $maxLength = NULL)
	{
		$control = new Controls\TextInput($label, $maxLength);
		$control->setAttribute('size', $cols);
		return $this[$name] = $control;
	}


	/**
	 * Adds single-line text input control used for sensitive input such as passwords.
	 * @param  string  control name
	 * @param  string  label
	 * @param  int  width of the control (deprecated)
	 * @param  int  maximum number of characters the user may enter
	 * @return Nette\Forms\Controls\TextInput
	 */
	public function addPassword($name, $label = NULL, $cols = NULL, $maxLength = NULL)
	{
		$control = new Controls\TextInput($label, $maxLength);
		$control->setAttribute('size', $cols);
		return $this[$name] = $control->setType('password');
	}


	/**
	 * Adds multi-line text input control to the form.
	 * @param  string  control name
	 * @param  string  label
	 * @param  int  width of the control
	 * @param  int  height of the control in text lines
	 * @return Nette\Forms\Controls\TextArea
	 */
	public function addTextArea($name, $label = NULL, $cols = NULL, $rows = NULL)
	{
		$control = new Controls\TextArea($label);
		$control->setAttribute('cols', $cols)->setAttribute('rows', $rows);
		return $this[$name] = $control;
	}


	/**
	 * Adds control that allows the user to upload files.
	 * @param  string  control name
	 * @param  string  label
	 * @param  bool  allows to upload multiple files
	 * @return Nette\Forms\Controls\UploadControl
	 */
	public function addUpload($name, $label = NULL, $multiple = FALSE)
	{
		return $this[$name] = new Controls\UploadControl($label, $multiple);
	}


	/**
	 * Adds control that allows the user to upload multiple files.
	 * @param  string  control name
	 * @param  string  label
	 * @return Nette\Forms\Controls\UploadControl
	 */
	public function addMultiUpload($name, $label = NULL)
	{
		return $this[$name] = new Controls\UploadControl($label, TRUE);
	}


	/**
	 * Adds hidden form control used to store a non-displayed value.
	 * @param  string  control name
	 * @param  mixed   default value
	 * @return Nette\Forms\Controls\HiddenField
	 */
	public function addHidden($name, $default = NULL)
	{
		$control = new Controls\HiddenField;
		$control->setDefaultValue($default);
		return $this[$name] = $control;
	}


	/**
	 * Adds check box control to the form.
	 * @param  string  control name
	 * @param  string  caption
	 * @return Nette\Forms\Controls\Checkbox
	 */
	public function addCheckbox($name, $caption = NULL)
	{
		return $this[$name] = new Controls\Checkbox($caption);
	}


	/**
	 * Adds set of radio button controls to the form.
	 * @param  string  control name
	 * @param  string  label
	 * @param  array   options from which to choose
	 * @return Nette\Forms\Controls\RadioList
	 */
	public function addRadioList($name, $label = NULL, array $items = NULL)
	{
		return $this[$name] = new Controls\RadioList($label, $items);
	}


	/**
	 * Adds set of checkbox controls to the form.
	 * @return Nette\Forms\Controls\CheckboxList
	 */
	public function addCheckboxList($name, $label = NULL, array $items = NULL)
	{
		return $this[$name] = new Controls\CheckboxList($label, $items);
	}


	/**
	 * Adds select box control that allows single item selection.
	 * @param  string  control name
	 * @param  string  label
	 * @param  array   items from which to choose
	 * @param  int     number of rows that should be visible
	 * @return Nette\Forms\Controls\SelectBox
	 */
	public function addSelect($name, $label = NULL, array $items = NULL, $size = NULL)
	{
		$control = new Controls\SelectBox($label, $items);
		if ($size > 1) {
			$control->setAttribute('size', (int) $size);
		}
		return $this[$name] = $control;
	}


	/**
	 * Adds select box control that allows multiple item selection.
	 * @param  string  control name
	 * @param  string  label
	 * @param  array   options from which to choose
	 * @param  int     number of rows that should be visible
	 * @return Nette\Forms\Controls\MultiSelectBox
	 */
	public function addMultiSelect($name, $label = NULL, array $items = NULL, $size = NULL)
	{
		$control = new Controls\MultiSelectBox($label, $items);
		if ($size > 1) {
			$control->setAttribute('size', (int) $size);
		}
		return $this[$name] = $control;
	}


	/**
	 * Adds button used to submit form.
	 * @param  string  control name
	 * @param  string  caption
	 * @return Nette\Forms\Controls\SubmitButton
	 */
	public function addSubmit($name, $caption = NULL)
	{
		return $this[$name] = new Controls\SubmitButton($caption);
	}


	/**
	 * Adds push buttons with no default behavior.
	 * @param  string  control name
	 * @param  string  caption
	 * @return Nette\Forms\Controls\Button
	 */
	public function addButton($name, $caption = NULL)
	{
		return $this[$name] = new Controls\Button($caption);
	}


	/**
	 * Adds graphical button used to submit form.
	 * @param  string  control name
	 * @param  string  URI of the image
	 * @param  string  alternate text for the image
	 * @return Nette\Forms\Controls\ImageButton
	 */
	public function addImage($name, $src = NULL, $alt = NULL)
	{
		return $this[$name] = new Controls\ImageButton($src, $alt);
	}


	/**
	 * Adds naming container to the form.
	 * @param  string  name
	 * @return Container
	 */
	public function addContainer($name)
	{
		$control = new self;
		$control->currentGroup = $this->currentGroup;
		return $this[$name] = $control;
	}


	/********************* interface \ArrayAccess ****************d*g**/


	/**
	 * Adds the component to the container.
	 * @param  string  component name
	 * @param  Nette\ComponentModel\IComponent
	 * @return void
	 */
	public function offsetSet($name, $component)
	{
		$this->addComponent($component, $name);
	}


	/**
	 * Returns component specified by name. Throws exception if component doesn't exist.
	 * @param  string  component name
	 * @return Nette\ComponentModel\IComponent
	 * @throws Nette\InvalidArgumentException
	 */
	public function offsetGet($name)
	{
		return $this->getComponent($name, TRUE);
	}


	/**
	 * Does component specified by name exists?
	 * @param  string  component name
	 * @return bool
	 */
	public function offsetExists($name)
	{
		return $this->getComponent($name, FALSE) !== NULL;
	}


	/**
	 * Removes component from the container.
	 * @param  string  component name
	 * @return void
	 */
	public function offsetUnset($name)
	{
		$component = $this->getComponent($name, FALSE);
		if ($component !== NULL) {
			$this->removeComponent($component);
		}
	}


	/**
	 * Prevents cloning.
	 */
	public function __clone()
	{
		throw new Nette\NotImplementedException('Form cloning is not supported yet.');
	}

}
