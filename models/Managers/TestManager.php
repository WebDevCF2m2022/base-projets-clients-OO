<?php

namespace model\Managers;

use model\Interfaces\ManagersInterfaces;
use PDO;
use Exception;

class TestManager implements ManagersInterfaces
{

    private $connect;

    public function __construct(PDO $connection)
    {
        $this->connect = $connection;
    }

    public function getOneById(int $id)
    {
        $this->connect->prepare("SELECT * FROM test WHERE `idTest` = :id");
        $this->connect->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $this->connect->execute();
            $result = $this->connect->fetch();
            return $result;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    public function getAll()
    {
        $this->connect->prepare("SELECT * FROM test");
        try {
            $this->connect->execute();
            $result = $this->connect->fetchAll();
            return $result;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }
}