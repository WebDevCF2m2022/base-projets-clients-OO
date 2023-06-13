<?php
use models\Managers\CategoriesManager;

$categoriesManager = new CategoriesManager($pdo);

$categories = $categoriesManager->getOneById(1);

$categwithuser = $categoriesManager->getOneByIdWithUser(1);

var_dump($categories,$categwithuser);



