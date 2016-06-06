<?php
use Fitak\Group;
use Nette\Application\UI;
use Fitak\SignUpManager;

class AdminPresenter extends BasePresenter
{

    /** @var SignUpManager @inject */
    public $signUpManager;

    protected function startup()
    {
        parent::startup();
        $this->requireAdmin();
    }

    public function renderDefault() {
        $this->template->groups = $this->orm->groups->findAll();
    }

    //TODO This should be component!!!!
    protected function createComponentAddUserForm()
    {
        $form = new UI\Form();
        $form->addText('email', 'E-mail')
            ->setType('email')
            ->setRequired('Vyplň e-mailovou adresu.')
            ->addRule($form::EMAIL, 'Vyplněná e-mailová adresa nemá správný tvar, zkontroluj si překlepy.');
        $form->addPassword('password', 'Heslo')
            ->setOption('description', '(jiné než „Heslo ČVUT“)')
            ->setRequired('Vyplň heslo.');
        $form->addPassword('passwordCheck', 'Heslo (pro kontrolu)')
            ->setOmitted()
            ->setRequired('Vyplň heslo ještě jednou, pro kontrolu.')
            ->addRule($form::EQUAL, 'Zadané hesla se musí shodovat, zkontroluj překlepy.', $form['password']);
        $form->addButton('fbConnect', 'Propojit s Facebookem')
            ->setAttribute('onclick', 'checkLoginState()')
            ->setHtmlId('fbConnect');
        $form->addHidden('fbId', NULL)
            ->setHtmlId('fbId');
        $form->addHidden('fbAccessToken', NULL)
            ->setHtmlId('fbAccessToken');
        $form->addText('name', 'Jméno uživatele')
            ->setRequired('Jméno je povinná položka')
            ->setHtmlId('name');
        $form->addText('profilePicture', 'Odkaz na profilovou fotku')
            ->setHtmlId('profilePicture');
        $form->addSubmit('signUp', 'Zaregistrovat uživatele');
        $form->onSuccess[] = [$this, 'processSignUpForm'];

        return $form;
    }

    public function processSignUpForm(UI\Form $form, array $values)
    {
        try {
            $this->signUpManager->signUp($values);
            $this->flashMessage('Na zadanou e-mailovou adresu byl odeslán aktivační odkaz.
                                    Bez aktivace účtu se není možné přihlásit.', 'success');
            $this->redirect('Admin:');
        } catch (DuplicateEmailException $e) {
            /** @var UI\Form|\Nette\Forms\Controls\BaseControl[] $form */
            $form['email']->addError('S tímto mailem je tu již někdo zaregistrovaný.');
        }
    }

    protected function createComponentAddAdminForm()
    {
        $form = new UI\Form();
        $form->addText('email', 'E-mail')
            ->setType('email')
            ->setRequired('Vyplň e-mailovou adresu.')
            ->addRule($form::EMAIL, 'Vyplněná e-mailová adresa nemá správný tvar, zkontroluj si překlepy.');
        $form->addSubmit('addAdmin', 'Přidat administrátora');
        $form->onSuccess[] = [$this, 'processAddAdminForm'];

        return $form;
    }

    public function processAddAdminForm(UI\Form $form, array $values)
    {
        $email = $values['email'];
        $user = $this->orm->users->getByEmail($email);

        if ($user) {
            $user->admin = 1;
            $this->orm->users->persistAndFlush($user);
            $this->flashMessage('Uživateli byly úspěšně přidělena administrátorská práva', 'success');
        } else {
            $this->flashMessage('Uživatel se zadaným e-mailem neexistuje', 'alert');
        }

        $this->redirect('Admin:');
    }

    protected function createComponentAddGroupForm()
    {
        $form = new UI\Form();
        $form->addText('id', 'ID FB skupiny')
            ->setRequired('Vyplň ID FB skupiny.')
            ->addRule($form::NUMERIC, 'ID může obsahovat pouze číslice');
        $form->addText('name', 'Jméno FB skupiny')
            ->setRequired('Vyplň jméno FB skupiny.');
        $form->addSubmit('addGroup', 'Přidat FB skupinu');
        $form->onSuccess[] = [$this, 'processAddGroupForm'];

        return $form;
    }

    public function processAddGroupForm(UI\Form $form, array $values)
    {
        $group = $this->orm->groups->getById($values['id']);

        if ($group) {

            $this->flashMessage('FB skupina s tímto ID už na Fiťákovi existuje', 'alert');
        } else {
            $group = new Group();
            $group->id = $values['id'];
            $group->name = $values['name'];
            $this->orm->groups->persistAndFlush($group);
            $this->flashMessage('FB skupina byla úspěšně přidána do seznamu stahovaných', 'success');
        }

        $this->redirect('Admin:');
    }

    public function handleRemoveGroup($id) {
        $group = $this->orm->groups->getById($id);

        if ($group) {
            $this->orm->groups->removeAndFlush($group, TRUE);
            $this->flashMessage('FB skupina byla úspěšně smazána', 'success');
        } else {
            $this->flashMessage('Tato FB skupina neexistuje', 'success');
        }

        $this->redirect('Admin:');
    }
}