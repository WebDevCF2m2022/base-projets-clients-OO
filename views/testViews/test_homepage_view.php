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
<h2>Un article</h2>
<?php
echo $one->getIdTest() . "<br>";
echo $one->getTitreTest() . "<br>";
echo $one->getSlugifyTest() . "<br>";
echo $one->getDatetimeTest() . "<br>";
echo $one->getTextTest() . "<br>";
echo $one->getPubliTest() . "<br>";
?>

</body>
</html>