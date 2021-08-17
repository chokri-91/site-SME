<?php

try
{
    $bdd = new PDO('mysql:host=db.3wa.io;dbname=chokri_sme-devis;charset=UTF8', 'chokri', '3aae96089b19a57dc8d22cc1efca78f7');
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