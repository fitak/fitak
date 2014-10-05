<?php

namespace Bin\Commands;

use Kdyby\Console\Application;
use Nette\DI\Container;
use Symfony\Component\Console\Command\Command as SCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;


class Command extends SCommand
{

	/** @var InputInterface */
	protected $in;

	/** @var OutputInterface|ConsoleOutput */
	protected $out;

	/** @var Container */
	private $container;

	public function setApplication(Application $application = NULL)
	{
		parent::setApplication($application);
		$application->setAutoExit(TRUE);

		/** @var Container $container */
		$this->container = $this->getHelper('container')->getContainer();
		$this->container->callInjects($this);
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$this->in = $input;
		$this->out = $output;

		return $this->container->callMethod([$this, 'invoke']);
	}

}
