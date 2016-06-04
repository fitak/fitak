<?php

use Fitak\Orm;
use Nette\Application\UI\Form;

class SearchForm extends Form
{

	const SEMESTER = 'semester';

	public function __construct(Orm $orm, $advanced = TRUE)
	{
		parent::__construct();

		$this->addText('s', 'dotaz')
			->setAttribute('autofocus', TRUE);

		if ($advanced)
		{
			$day = 24 * 3600;
			$this->addSelect('limit', 'Časové omezení', [
				0 => 'bez omezení',
				(2 * $day) => 'poslední 2 dny',
				(14 * $day) => 'poslední 2 týdny',
				(61 * $day) => 'poslední 2 měsíce',
				self::SEMESTER => 'probíhající semestr',
			]);

			$this->addText('from', 'Autor:');

			$this->addCheckboxList('groups', 'Skupiny', $orm->groups->findList());
		}

		$this->addSubmit('send', 'Vyhledat');
	}

	public function submitted(self $form)
	{
		$values = $form->getValues(TRUE);
		$params = ['s' => $values['s']];

		if (isSet($values['limit']))
		{
			if ($values['limit'])
			{
				$params['limit'] = $values['limit'];
			}

			if ($values['groups'] !== array_filter($values['groups']))
			{
				$params['groups'] = array_keys(array_filter($values['groups']));
			}

			if (!empty($values['from']))
			{
				$params['from'] = $values['from'];
			}
		}

		$this->presenter->redirect('Homepage:', $params);
	}

}
