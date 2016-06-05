<?php

namespace Fitak;

use Nette\Application\UI;


class SavedSearchesControl extends UI\Control
{

    private $savedSearches;

    public function __construct($savedSearches)
    {
        parent::__construct();
        $this->savedSearches = $savedSearches;
    }

    public function render()
    {
        $this->template->setFile(__DIR__ . '/SavedSearchesControl.latte');
        $this->template->savedSearches = $this->savedSearches;
        $this->template->render();
    }
}
