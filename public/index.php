<?php
session_start();

require_once "../config.php";

// Autoload classes
spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require '../' .$class . '.php';
});

// autoload classes from composer
require_once "../vendor/autoload.php";

// db connection
try {
    $pdo = new PDO(
        DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET . ';port=' . DB_PORT,
        DB_USER,
        DB_PWD,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (Exception $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit;
}

// choix du controller
if(isset($_SESSION['sessionid']) && $_SESSION['sessionid'] == session_id()){
    require_once "../controllers/privateController.php";
}else{
    require_once "../controllers/testController.php";
}