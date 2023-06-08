<?php

use models\Managers\TestManager;

// instanciation de notre manager
$manager = new TestManager($pdo);

$one = $manager->getOneById(1);
$all = $manager->getAll();


// appel de la vue
require_once "../views/testViews/test_homepage_view.php";