<?php

use Elasticsearch\Client;
use Elasticsearch\Common\Exceptions\Missing404Exception;
use Nette\Neon\Neon;


class ElasticSearch extends Client
{

	const INDEX = 'fitak';

	const TYPE_CONTENT = 'content';

	const HIGHLIGHT_START = '{{%highlight%}}';
	const HIGHLIGHT_END = '{{%/highlight%}}';

	/**
	 * @var string path
	 */
	private $appDir;

	/**
	 * @var callable[]
	 */
	public $onEvent;

	public function __construct(array $params, $appDir)
	{
		parent::__construct($params);

		$this->appDir = $appDir;
	}

	/**
	 * @deprecated
	 * @param $params
	 * @return void
	 */
	public function index($params)
	{
		throw new DeprecatedException('Use addToIndex instead');
	}

	/**
	 * @param string $type entity name
	 * @param int $id entity id
	 * @param int $timestamp
	 * @param array $data
	 * @return array
	 */
	public function addToIndex($type, $id, array $data)
	{
		return parent::index([
			'index' => self::INDEX,
			'type' => $type,
			'id' => $id,
			'body' => $data,
		]);
	}

	public function update($args)
	{
		throw new DeprecatedException('Use updateDoc or updateScript instead');
	}

	public function updateDoc($type, $id, array $data)
	{
		return parent::update([
			'index' => self::INDEX,
			'type' => $type,
			'id' => $id,
			'body' => [
				'doc' => $data,
			],
		]);
	}

	public function addMapping($type, array $fields)
	{
		$args = [
			'index' => self::INDEX,
			'type' => $type,
			'body' => [
				'properties' => $fields,
			]
		];
		$this->indices()->putMapping($args);
	}

	public function fulltextSearch(SearchRequest $request, $limit, $offset)
	{
		$args = [
			'index' => self::INDEX,
			'type' => self::TYPE_CONTENT,
			'body' => [
				'fields' => [],
				'from' => $offset,
				'size' => $limit,
				'query' => [
					'function_score' => [
						'query' => [
							'bool' => [
								'should' => [
									'match' => [
										'is_topic' => [
											'query' => TRUE,
										],
									],
								]
							]
						],
						'field_value_factor' => [
							'field' => 'likes',
							'factor' => 1.2,
							'modifier' => 'log1p',
						]
					]
				],
				'highlight' => [
					'pre_tags' => [self::HIGHLIGHT_START],
					'post_tags' => [self::HIGHLIGHT_END],
					'fields' => [
						'message' => ['number_of_fragments' => 0], // return full string (defaults to substrings)
					]
				]
			]
		];
		if ($request->tags || $request->query)
		{
			$query = trim(implode(' ', $request->tags) . ' ' . $request->query);
			$args['body']['query']['function_score']['query']['bool']['must'][] = [
				'multi_match' => [
					'query' => $query,
					'fields' => ['message'],
				],
			];
		}
		if ($request->from)
		{
			$args['body']['query']['function_score']['query']['bool']['must'][] = [
				'match' => [
					'author' => $request->from,
				]
			];
		}
		if ($request->groups)
		{
			$args['body']['filter'] = [
				'terms' => [
					'group' => $request->groups,
					'execution' => 'bool',
				]
			];
		}
		if ($request->sortBy === SearchRequest::SORT_TIME)
		{
			$args['body']['sort'] = [
				'created_time' => 'desc',
			];
		}

		return $this->search($args);
	}

	/**
	 * Drops index if exists, which DROPS ALL DATA
	 */
	public function setupIndices()
	{
		$conf = file_get_contents($this->appDir . '/config/elasticsearch.neon');
		$conf = str_replace('%rootDir%', __DIR__ . '/../..', $conf);
		$args = Neon::decode($conf);
		try
		{
			$this->indices()->delete([
				'index' => self::INDEX,
			]);
		}
		catch (Missing404Exception $e)
		{
			// ok, nothing to delete
		}

		$this->indices()->create([
			'index' => self::INDEX,
			'body' => $args
		]);
	}

	/**
	 * List of Czech stopwords from Lucene 3.0.1
	 * @see http://www.docjar.com/html/api/org/apache/lucene/analysis/cz/CzechAnalyzer.java.html
	 * @return array
	 */
	public static function getStopwords()
	{
		return [
			'a', 's', 'k', 'o', 'i', 'u', 'v', 'z', 'dnes', 'cz', 'tímto', 'budeš', 'budem',
			'byli', 'jseš', 'můj', 'svým', 'ta', 'tomto', 'tohle', 'tuto', 'tyto',
			'jej', 'zda', 'proč', 'máte', 'tato', 'kam', 'tohoto', 'kdo', 'kteří',
			'mi', 'nám', 'tom', 'tomuto', 'mít', 'nic', 'proto', 'kterou', 'byla',
			'toho', 'protože', 'asi', 'ho', 'naši', 'napište', 're', 'což', 'tím',
			'takže', 'svých', 'její', 'svými', 'jste', 'aj', 'tu', 'tedy', 'teto',
			'bylo', 'kde', 'ke', 'pravé', 'ji', 'nad', 'nejsou', 'či', 'pod', 'téma',
			'mezi', 'přes', 'ty', 'pak', 'vám', 'ani', 'když', 'však', 'neg', 'jsem',
			'tento', 'článku', 'články', 'aby', 'jsme', 'před', 'pta', 'jejich',
			'byl', 'ještě', 'až', 'bez', 'také', 'pouze', 'první', 'vaše', 'která',
			'nás', 'nový', 'tipy', 'pokud', 'může', 'strana', 'jeho', 'své', 'jiné',
			'zprávy', 'nové', 'není', 'vás', 'jen', 'podle', 'zde', 'už', 'být', 'více',
			'bude', 'již', 'než', 'který', 'by', 'které', 'co', 'nebo', 'ten', 'tak',
			'má', 'při', 'od', 'po', 'jsou', 'jak', 'další', 'ale', 'si', 'se', 've',
			'to', 'jako', 'za', 'zpět', 'ze', 'do', 'pro', 'je', 'na', 'atd', 'atp',
			'jakmile', 'přičemž', 'já', 'on', 'ona', 'ono', 'oni', 'ony', 'my', 'vy',
			'jí', 'ji', 'mě', 'mne', 'jemu', 'tomu', 'těm', 'těmu', 'němu', 'němuž',
			'jehož', 'jíž', 'jelikož', 'jež', 'jakož', 'načež',

			// Application stop words
			'bi', 'bie', 'bik', 'fi', 'fit', 'mi', 'mie', 'pi', 'pik',
		];
	}

}
