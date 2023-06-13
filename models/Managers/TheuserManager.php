<?php

namespace models\Managers;

use PDO;
use Exception;

use models\Interfaces\ManagersInterfaces;
use models\Mappings\TheuserMapping;
use models\Interfaces\SecurityInterfaces;

class TheuserManager implements ManagersInterfaces, SecurityInterfaces
{

    protected PDO $connect;
    public function __construct(PDO $connection)
    {
        $this->connect = $connection;
    }

    public function getOneById(int $id) : ?TheuserMapping
    {
        $prepare = $this->connect->prepare("SELECT * FROM theuser WHERE `idUser` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try{
            $prepare->execute();
            $result = $prepare->fetch();
            return new TheuserMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    public function getAll(): array
    {
        $prepare = $this->connect->prepare("SELECT * FROM theuser");
        try{
            $prepare->execute();
            $result = $prepare->fetchAll();
            $all = [];
            foreach($result as $row){
                $all[] = new TheuserMapping($row);
            }
            return $all;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    public function getUserByLogin(string $login): ?TheuserMapping{
        $prepare = $this->connect->prepare("SELECT * FROM theuser WHERE `loginUser` = :login");
        $prepare->bindValue(":login", $login, PDO::PARAM_STR);
        try{
            $prepare->execute();
            $result = $prepare->fetch();
            return new TheuserMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    public function InsertUser(TheuserMapping $datas): bool
    {
        $prepare = $this->connect->prepare("INSERT INTO `theuser` (`loginUser`, `pwdUser`, `mailUser`) VALUES (:loginUser, :passwordUser, :emailUser)");
        $prepare->bindValue(":loginUser", $datas->getLoginUser(), PDO::PARAM_STR);
        $prepare->bindValue(":passwordUser", $this->HashPassword($datas->getPwdUser()), PDO::PARAM_STR);
        $prepare->bindValue(":emailUser", $datas->getMailUser(), PDO::PARAM_STR);
        try {
            $prepare->execute();
            return true;
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }
    }

    public function VerifyPassword(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }

    public function HashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}