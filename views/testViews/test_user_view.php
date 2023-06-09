<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user</title>
</head>
<body>
<h1>user</h1>
<nav>
    <ul>
        <li><a href=".">test</a></li>
        <li><a href="?user">user</a> </li>
    </ul>
</nav>
<h2>Utilisateur dont l'id est 1</h2>
<?php
echo $one->getIdUser()."<br>";
echo $one->getLoginUser()."<br>";
echo $one->getPwdUser()."<br>";
echo $one->getMailUser()."<br>";
?>
<h2>Tous les utilisateurs</h2>
<?php
foreach ($all as $item) {
    echo $item->getIdUser()."<br>";
    echo $item->getLoginUser()."<br>";
    echo $item->getPwdUser()."<br>";
    echo $item->getMailUser()."<br><br>";
}
?>
<h2>Insertion d'un utilisateur</h2>
<form action="" method="post" name="newTest">
    <input type="text" name="loginUser" required placeholder="Votre login"><br>
    <input type="password" name="pwdUser" required placeholder="Votre mot de passe"><br>
    <textarea type="mail" name="mailUser" required placeholder="votre mail"></textarea><br>
    <input type="submit" value="Envoyer">
</form>
<h2>Connexion d'un utilisateur</h2>
<form action="" method="post" name="connectUser">
    <input type="text" name="loginUser" required placeholder="Votre login"><br>
    <input type="password" name="pwdUser" required placeholder="Votre mot de passe"><br>
    <input type="submit" value="Envoyer">
</body>
</html>