<?php

namespace models\Managers;

use PDO;
use models\Mappings\CategoriesMapping;
use \models\Interfaces\ManagersInterfaces;

class CategoriesManager implements ManagersInterfaces
{

    private PDO $db;
    public
    function __construct(PDO $connection)
    {
        $this->db = $connection;
    }

    public
    function getOneById(int $id)
    {
        $prepare = $this->db->prepare("SELECT * FROM categories WHERE `idCateg` = :id");
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new CategoriesMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }
    public
    function getOneByIdWithUser(int $id)
    {
        $prepare = $this->db->prepare("
SELECT c.*, GROUP_CONCAT(t.idUser,'--',t.loginUser SEPARATOR '|||') as users FROM categories c
INNER JOIN categ_has_user h ON c.idCateg = h.idCateg
INNER JOIN theuser t ON h.idTheUser = t.idUser
         WHERE c.idCateg = :id
         GROUP BY c.idCateg"
        );
        $prepare->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            $prepare->execute();
            $result = $prepare->fetch();
            return new CategoriesMapping($result);
        } catch (Exception $e) {
            echo "Erreur de requête : " . $e->getMessage();
            exit;
        }

    }

    public
    function getAll()
    {
        // TODO: Implement getAll() method.
    }
}