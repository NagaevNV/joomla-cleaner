<?php
/**
 * Created by PhpStorm.
 * User: nagaevnv
 * Date: 23.07.17
 * Time: 16:07
 */

namespace Cleaner\Command;

use Doctrine\DBAL\Connection;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class CleanCommand
 * @package Cleaner
 */
class CleanDomainNamesCommand extends Command implements DbalAwareInterface
{
    /**
     * @var Connection
     */
    private $connection;

    protected function configure()
    {
        $this->setName('cleaner:clean:domain-names');
        $this->setAliases(['cdn']);
        $this->setDescription('Clean domain names from urls');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write("hello world\n");
    }

    /**
     * @param Connection $connection
     */
    public function setConnection(Connection $connection)
    {
        $this->connection = $connection;
    }
}
