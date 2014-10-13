<?php

use Fitak\PasswordResetManager;
use Fitak\TagsImporter;
use Nette\Application\UI;
use Nette\Utils\Strings;


class SettingsPresenter extends BasePresenter
{

	/** @var PasswordResetManager @inject */
	public $passwordResetManager;

	/** @var TagsImporter @inject */
	public $tagsImporter;

	protected function startup()
	{
		parent::startup();
		$this->requireLogin('Pro přístup k nastavení je nutné se přihlásit.');
	}

	/**
	 * @secured
	 */
	public function handleResetPassword()
	{
		$this->passwordResetManager->sendResetLink($this->getLoggedInUser());
		$this->flashMessage('Na mail jsme ti poslali odkaz pro resetování hesla.');
		$this->redirect('this');
	}

	/**
	 * @secured
	 */
	public function handleImportTags()
	{
		$user = $this->getLoggedInUser();
		$tags = $this->tagsImporter->importTags($user);
		if ($tags)
		{
			$this->orm->users->persistAndFlush($user);
			$this->flashMessage('Tagy byly úspěšně naimportovány');
		}
		else
		{
			$this->flashMessage('Žádné tagy nenalezeny', 'warning');
		}
		$this->redirect('this');
	}

	protected function createComponentSettingsForm()
	{
		$user = $this->getLoggedInUser();
		$favoriteTags = $user->favoriteTags->get()->fetchPairs(NULL, 'name');

		$form = new UI\Form();
		$form->addText('favoriteTags', 'Sledované tagy')
			->setOption('description', 'oddělené mezerou')
			->setDefaultValue(implode(' ', $favoriteTags));

		$form->addSubmit('save', 'Uložit');
		$form->onSuccess[] = [$this, 'processSettingsForm'];

		return $form;
	}

	public function processSettingsForm(UI\Form $form, array $values)
	{
		$favoriteTags = Strings::split($values['favoriteTags'], '~\s*,\s*|\s+~');
		$favoriteTags = $this->orm->tags->findByName($favoriteTags)->fetchAll();

		$user = $this->getLoggedInUser();
		$user->favoriteTags->set($favoriteTags);
		$this->orm->users->persistAndFlush($user);

		$this->flashMessage('Nastavení bylo uloženo.');
		$this->redirect('this');
	}

}
