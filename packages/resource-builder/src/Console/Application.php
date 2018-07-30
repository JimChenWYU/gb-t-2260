<?php

declare(ticks=1);

namespace JimChen\GBT2260\ResourceBuilder\Console;

use Symfony\Component\Console\Application as SymfonyConsoleApplication;
use JimChen\GBT2260\ResourceBuilder\Application as BuilderApplication;

class Application extends SymfonyConsoleApplication
{
	/**
	 * Create the console app instance.
	 */
	public function __construct()
	{
		parent::__construct();

		// Set the console app name.
		$this->setName(BuilderApplication::NAME);

		// set the console app version
		$this->setVersion(BuilderApplication::VERSION);
	}
}
