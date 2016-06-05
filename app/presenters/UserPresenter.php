<?php
use Nette\Application\UI;

class UserPresenter extends BasePresenter
{
	/** @var \Kdyby\Facebook\Facebook @inject */
	public $facebook;

	/** @var */
    private $user;


    protected function createComponentUserSettingsForm() {
        $this->user = $this->getLoggedInUser();
        $user = $this->user;

        $form = new UI\Form;
        $form->addText('name', 'Jméno:')
            ->setDefaultValue($user->name);
        $form->addText('profile_picture', 'Avatar:')
            ->setDefaultValue($user->profilePicture);
        $form->addPassword('password', 'Heslo:');
        $form->addPassword('password_again', 'Heslo pro kontrolu:')
            ->addRule($form::EQUAL, 'Zadané hesla se musí shodovat, zkontroluj si překlepy.', $form['password']);
        $form->addSubmit('login', 'Změnit nastavení');
        $form->onSuccess[] = [$this, 'formSubmitted'];
        return $form;
    }

    public function formSubmitted(UI\Form $form, $values)
    {
        $values = $values = $form->getValues(TRUE);
        $user = $this->user;
        $user->name = $values['name'];
        $user->profilePicture = $values['profile_picture'];

        if ($values['password']) {
            $user->passwordHash = password_hash($values['password'], PASSWORD_BCRYPT);
        }

        $this->orm->users->persistAndFlush($user);

        $this->flashMessage('Nastavení úspěšně změněno', 'success');
        $this->redirect('User:');
    }
}

