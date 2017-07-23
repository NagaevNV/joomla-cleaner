<?php
/**
 * Created by PhpStorm.
 * User: nagaevnv
 * Date: 23.07.17
 * Time: 17:22
 */

namespace Cleaner\Command;


use Doctrine\DBAL\Connection;

interface DbalAwareInterface
{
    public function setConnection(Connection $connection);
}