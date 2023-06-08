<?php

namespace model\Interfaces;

use PDO;
use Exception;

interface ManagersInterfaces
{
    public function __construct(PDO $connection);
    public function getOneById(int $id);
    public function getAll();
}