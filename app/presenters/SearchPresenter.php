<?php

/**
 * Description of SearchPresenter
 *
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
use Nette\Diagnostics\Debugger;

class SearchPresenter extends BasePresenter
{

    private $searchQuery, $includeComments, $vp;
    private $itemsCount = NULL;

    public function renderDefault( $s, $comments )
    {
	$this->searchQuery = $s;
	$this->includeComments = $comments;
	$this->template->s = $s;
	$this->template->itemsCount = $this->getItemsCount();

	// ***************** get some variations on keywords for highlighting *****************//
	$highlightKeywords[] = $s;
	$highlightKeywords[] = $sNoBrackets = preg_replace( "/[\[\](){}]/", "", $s );
	foreach( explode( "-", $sNoBrackets ) as $subword )
	{
	    if( !in_array( $subword, $highlightKeywords ) && strlen( $subword ) > 2 )
		$highlightKeywords[] = $subword;
	}
	foreach( explode( "_", $sNoBrackets ) as $subword )
	{
	    if( !in_array( $subword, $highlightKeywords ) && strlen( $subword ) > 2 )
		$highlightKeywords[] = $subword;
	}
	foreach( explode( " ", $sNoBrackets ) as $subword )
	{
	    if( !in_array( $subword, $highlightKeywords ) && strlen( $subword ) > 2 )
		$highlightKeywords[] = $subword;
	}
	//***********************************************************************************//
	// paginator...
	$this->vp = new VisualPaginator( $this, 'vp' );
	$paginator = $this->vp->getPaginator();
	$paginator->itemsPerPage = 15;
	$paginator->itemCount = $this->getItemsCount();

	$this->template->highlightKeywords = $highlightKeywords;
	$this->template->data = $this->context->data->search( $s, $comments, $paginator->getLength(), $paginator->getOffset() );
    }

    protected function createComponentSearchForm()
    {
	$form = new SearchForm();
	$form->setDefaults( array(
	    's' => $this->searchQuery,
	    'includeComments' => $this->includeComments
	) );
	$form->onSuccess[] = callback( $form, 'submitted' );
	return $form;
    }

    protected function getItemsCount()
    {
	if( $this->itemsCount == NULL )
	{
	    $this->itemsCount = $this->context->data->searchCount( $this->searchQuery, $this->includeComments );
	}
	return $this->itemsCount;
    }

}