<?php

require_once __DIR__ . './parameters/database.php';

$insertNewUser = $pdo->prepare("INSERT INTO users VALUES (DEFAULT, :pseudo, :password, :confirmPass, :email)");
$insertNewUser->bindParam('pseudo', $pseudo);
$insertNewUser->bindParam('password', $password);
$insertNewUser->bindParam('confirmPass', $confirmPass);
$insertNewUser->bindParam('email', $email);


$loginCheck = $pdo->prepare("SELECT id, pseudo, password, email FROM users WHERE pseudo = :pseudo AND password = :password AND email = :email");
$loginCheck->bindParam('pseudo', $pseudoCheck);
$loginCheck->bindParam('password', $passwordCheck);
$loginCheck->bindParam('email', $emailCheck);



$uploadImageProfil = $pdo->prepare("INSERT INTO images (file_name, uploaded_on) VALUES (':fileName', NOW())");
$uploadImageProfil->bindParam('fileName', $fileName);



$insertImageBdd = $pdo->prepare("INSERT INTO images (file_name, uploaded_on, idUsers)
VALUES (:fileName, :date, :idUsers)");
$insertImageBdd->bindParam('fileName', $fileName);
$insertImageBdd->bindParam('date', $dateUpload);
$insertImageBdd->bindParam('idUsers', $idUsers);

$getImage = $pdo->prepare("SELECT * FROM images WHERE idUsers = :idUsers ORDER BY uploaded_on ASC");
$getImage->bindParam('idUsers', $idUsers, PDO::PARAM_INT);



// echo "test";

