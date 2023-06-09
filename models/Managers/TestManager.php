<?php

namespace models\Managers;

use models\Interfaces\ManagersInterfaces;

use models\Mappings\TestMapping;
use PDO;
use Exception;

// appel du trait si on en a besoin
use models\Traits\TestTrait;

class TestManager implements ManagersInterfaces
{

    private $connect;

    // utilisation du trait
    use TestTrait;

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

    public function InsertTest(TestMapping $datas): bool
    {
        $slugify = $this->slugify($datas->getTitreTest());
        $datetime = date("Y-m-d H:i:s", strtotime($datas->getDatetimeTest()));

        $prepare = $this->connect->prepare("INSERT INTO test (`titreTest`, `slugifyTest`, `datetimeTest`, `textTest`) VALUES (:titreTest, :slugifyTest, :datetimeTest, :textTest)");
        $prepare->bindValue(":titreTest", $datas->getTitreTest(), PDO::PARAM_STR);
        $prepare->bindValue(":slugifyTest", $slugify, PDO::PARAM_STR);
        $prepare->bindValue(":datetimeTest", $datetime, PDO::PARAM_STR);
        $prepare->bindValue(":textTest", $datas->getTextTest(), PDO::PARAM_STR);
        try {
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }
}