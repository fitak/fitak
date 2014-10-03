<?php


/**
 * @author Vojtech Miksu <vojtech@miksu.cz>
 */
class SearchPresenter extends BasePresenter
{

	/** @var SearchRequest */
	private $searchRequest;

	public function actionDefault($s, $from = NULL, array $groups = NULL, $sortBy = NULL, $streamView = NULL)
	{
		$parsed = $this->context->searchQueryParser->parseQuery($s);

		$this->searchRequest = new SearchRequest();
		$this->searchRequest->query = $parsed['query'];
		$this->searchRequest->tags = $parsed['tags'];
		$this->searchRequest->from = $from;
		$this->searchRequest->groups = ($groups ? array_map('strval', $groups) : NULL);
		$this->searchRequest->sortBy = ($sortBy === SearchRequest::SORT_RELEVANCE) ? $sortBy : SearchRequest::SORT_TIME;

		$dataModel = $this->context->data;
		$this['stream']->dataSource = new SearchDataSource($dataModel, $this->searchRequest);
	}

	public function renderDefault($s, $from = NULL, array $groups = NULL, $sortBy = NULL, $streamView = NULL)
	{
		$this->template->advancedSearch = FALSE;
		$this->template->advancedSearch = (($this->searchRequest->from || $this->searchRequest->groups) && !$streamView);
		$this->template->tags = $this->searchRequest->tags;
		$this->template->resultsCount = $this['stream']->dataSource->getTotalCount();
	}

	public function actionStream()
	{
		$this['stream']->dataSource = new CompleteStreamDataSource($this->context->data);
	}

	protected function createComponentSearchForm()
	{
		if ($this->searchRequest->groups)
		{
			$groups = $this->searchRequest->groups;
		}
		else
		{
			$groups = $this->orm->groups->findAll()->fetchPairs(NULL, 'id');
		}

		$form = new SearchForm($this->orm);
		$form->setDefaults(
			[
				's' => $this->getParameter('s'),
				'from' => $this->searchRequest ? $this->searchRequest->from : NULL,
				'groups' => $groups,
			]
		);
		$form->onSuccess[] = callback($form, 'submitted');

		return $form;
	}

	protected function createComponentStream()
	{
		return new StreamControl($this->templateFactory);
	}

}
