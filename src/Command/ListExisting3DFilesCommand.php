<?php

declare(strict_types=1);

namespace Petro\ProductDesignConfiguratorPlugin\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ListExisting3DFilesCommand extends Command
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('petro:list-3d-files')->setDescription('List all 3D files in the system and the products associated with');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('3D list' . PHP_EOL);
    }
}
