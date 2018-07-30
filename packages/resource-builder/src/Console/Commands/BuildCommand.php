<?php

declare(ticks=1);

namespace JimChen\GBT2260\ResourceBuilder\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use JimChen\GBT2260\ResourceBuilder\Application;

class BuildCommand extends Command
{
	/**
	 * Builder Container
	 * @var \JimChen\GBT2260\ResourceBuilder\Application
	 */
	protected $app;

	/**
	 * Create the command instance.
	 * @param \JimChen\GBT2260\ResourceBuilder\Application $app
	 */
	public function __construct(Application $app)
	{
		$this->app = $app;

		parent::__construct();
	}

	/**
	 * Configure the command.
	 * @return void
	 */
	protected function configure()
	{
		$this
			// the name of the command
			->setName('build')
			// the short description shown while running
			->setDescription('Build GB/T 2260 resources')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
	}
}
