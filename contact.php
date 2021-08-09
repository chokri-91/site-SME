<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=devis-sme;charset=utf8', 'root', '');
}
catch (PDOException $erreur)
{
    die( 'Erreur :'. $erreur-> getMessage() );
}

$req = $bdd->prepare('INSERT INTO `contacts`(`firstName`, `lastName`, `company`, `email`, `phone`, `elevators`, `floors`, `type`, `createdAt`) VALUES (?,?,?,?,?,?,?,?, NOW())');

$req->execute([
    $_POST['first-name'],
    $_POST['last-name'],
    $_POST['company'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['elevators'],
    $_POST['floors'],
    $_POST['type']
]);

header('location:index.html');