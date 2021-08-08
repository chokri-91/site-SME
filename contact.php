<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=contact-sme;charset=utf8', 'root', '');
}
catch (PDOException $erreur)
{
    die( 'Erreur :'. $erreur-> getMessage() );
}


$req = $bdd->prepare('INSERT INTO `contacts`(`firstName`, `lastName`, `email`, `company`, `phone`, `question`, `createdAt`) VALUES (?,?,?,?,?,?,NOW())');

$req->execute([
    $_POST['first-name'],
    $_POST['last-name'],
    $_POST['email'],
    $_POST['company'],
    $_POST['phone'],
    $_POST['question']
]);

header('location:index.html');