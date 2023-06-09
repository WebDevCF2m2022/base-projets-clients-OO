<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
<h1>Test</h1>
<nav>
    <ul>
        <li><a href=".">test</a></li>
        <li><a href="?user">user</a> </li>
    </ul>
</nav>
<h2>Un article dont l'id est 1</h2>
<?php
echo $one->getIdTest() . "<br>";
echo $one->getTitreTest() . "<br>";
echo $one->getSlugifyTest() . "<br>";
echo $one->getDatetimeTest() . "<br>";
echo $one->getTextTest() . "<br>";
echo $one->getPubliTest() . "<br>";
echo $one->getIdUser() . "<br>";
?>
<h2>Tous les articles</h2>
<?php
foreach ($all as $item) {
    echo $item->getIdTest() . "<br>";
    echo $item->getTitreTest() . "<br>";
    echo $item->getSlugifyTest() . "<br>";
    echo $item->getDatetimeTest() . "<br>";
    echo $item->getTextTest() . "<br>";
    echo $item->getPubliTest() . "<br>";
    echo $item->getIdUser() . "<br><br>";


}
?>
<h2>Insertion d'un test</h2>
<form action="" method="post" name="newTest">
    <input type="text" name="titreTest" required placeholder="titre"><br>
    <input type="datetime-local" name="datetimeTest" required placeholder="date"><br>
    <textarea name="textTest" required placeholder="texte"></textarea><br>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>