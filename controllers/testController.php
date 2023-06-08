<?php

use models\Managers\TestManager;
use models\Mappings\TestMapping;

// instanciation de notre manager
$manager = new TestManager($pdo);
;
if(isset($_POST['titreTest'])) {

    $addTest = new TestMapping($_POST);
    $manager->InsertTest($addTest);

}



$one = $manager->getOneById(1);
$all = $manager->getAll();

// appel de la vue
require_once "../views/testViews/test_homepage_view.php";