<?php

use Fitak\RepositoryContainer;
use Nette\Application\UI\Form;

class SearchForm extends Form
{

	public function __construct(RepositoryContainer $orm, $advanced = TRUE)
	{
		parent::__construct();

		$this->addText('s', 'dotaz')
			->setAttribute('autofocus', TRUE);

		if ($advanced)
		{
			$today = strtotime('today');
			$day = 24 * 3600;
			$this->addSelect('since', 'Časové omezení', [
				0 => 'bez omezení',
				($today - 2 * $day) => 'poslední 2 dny',
				($today - 14 * $day) => 'poslední 2 týdny',
				($today - 60 * $day) => 'poslední 2 měsíce',
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

		if (isSet($values['since']))
		{
			if ($values['since'] > 0)
			{
				$params['since'] = $values['since'];
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

		$this->presenter->redirect('Search:', $params);
	}

}
