<?php

namespace models\Managers;

use models\Interfaces\ManagersInterfaces;

use models\Mappings\TestMapping;
use PDO;
use Exception;

class TestManager implements ManagersInterfaces
{

    private $connect;

    public function __construct(PDO $connection)
    {
        $this->connect = $connection;
    }

    public function getOneById(int $id): ?TestMapping
    {
        $prepare = $this->connect->prepare("SELECT * FROM test WHERE `idTest` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new TestMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    public function getAll(): ?array
    {
        $prepare = $this->connect->prepare("SELECT * FROM test");
        try {
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach ($result as $row) {
                $all[] = new TestMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }
}