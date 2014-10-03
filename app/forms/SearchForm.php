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
			$this->addSelect('sortBy', 'Seřadit podle:', [
				SearchRequest::SORT_TIME => 'času',
				SearchRequest::SORT_RELEVANCE => 'relevance',
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

		if (isSet($values['sortBy']))
		{
			if ($values['sortBy'] === SearchRequest::SORT_RELEVANCE)
			{
				$params['sortBy'] = $values['sortBy'];
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
