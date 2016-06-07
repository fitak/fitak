<?php

namespace Fitak;

use Nette\Application\UI;


class SavedSearchesControl extends UI\Control
{

    private $savedSearches;

    private $orm;

    public function __construct(Orm $orm, $savedSearches)
    {
        parent::__construct();
        $this->orm = $orm;
        $this->savedSearches = $savedSearches;
    }

    public function render()
    {
        $this->template->setFile(__DIR__ . '/SavedSearchesControl.latte');
        $this->template->savedSearches = $this->savedSearches;
        $this->template->render();
    }

    public function handleDelete($id) {
        $savedSearch = $this->orm->savedSearches->getById($id);
        $this->orm->savedSearches->removeAndFlush($savedSearch);
        $this->presenter->redirect('Homepage:');
    }
}
