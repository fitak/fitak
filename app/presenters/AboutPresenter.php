<?php

/**
 * Description of AboutPresenter
 *
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
class AboutPresenter extends BasePresenter
{

    /**
     * (non-phpDoc)
     *
     * @see Nette\Application\Presenter#startup()
     */
    public function renderDefault()
    {
        $this->template->count = $this->context->data->getCount();
        $this->template->groups = $this->context->groups->getList();
    }

}
