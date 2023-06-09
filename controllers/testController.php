<?php
use models\Managers\TheuserManager;
use models\Managers\TestManager;
use models\Mappings\TestMapping;
use models\Mappings\TheuserMapping;

if(isset($_GET['user'])){

    // instanciation de TheUserManager

    $managerUser = new TheuserManager($pdo);
    // insertion d'un user
    if(isset($_POST['mailUser'])) {

        try{
        $addUser = new TheuserMapping($_POST);
        }catch(Exception $e){
            echo $e->getMessage();
        }
        var_dump($_POST,$addUser);
        if($managerUser->InsertUser($addUser)) {
            echo "ok";
        }else {
            echo "pas ok";
        }


    }

    // connexion d'un user
    if(isset($_POST['loginUser'])) {
        $login = $_POST['loginUser'];
        $pwd = $_POST['pwdUser'];
        $user = $managerUser->getUserByLogin($login);
        if($user) {
            if($managerUser->VerifyPassword($pwd,$user->getPwdUser())) {
                $_SESSION['id'] = $user->getIdUser();
                $_SESSION['login'] = $user->getLoginUser();
                $_SESSION['sessionid'] = session_id();
                header("Location: ./");
            }else {
                echo "pas ok";
            }
        }else {
            echo "pas ok";
        }
    }

    $one = $managerUser->getOneById(1);
    $all = $managerUser->getAll();

    // appel de la vue
    require_once "../views/testViews/test_user_view.php";

    exit;
}



// instanciation de notre manager pour test
$manager = new TestManager($pdo);


if(isset($_POST['titreTest'])) {

    $addTest = new TestMapping($_POST);
    //var_dump($_POST,$addTest);
    $manager->InsertTest($addTest);

}



$one = $manager->getOneById(1);
$all = $manager->getAll();

// appel de la vue
require_once "../views/testViews/test_homepage_view.php";