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





