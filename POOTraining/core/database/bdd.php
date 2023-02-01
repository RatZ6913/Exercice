<?php

require_once __DIR__ . './database.php';
require_once __DIR__ . '../../parameters/form.parameter.php';

try {
  $useDBname = $pdo->prepare('USE poo_training');
  $useDBname->execute();

  $insertUser = $pdo->prepare('INSERT INTO users (pseudo_user, mail_user, password_user, confirm_password_user) VALUES (:pseudo, :mail, :password, :confirmPwd)
  ');
  $insertUser->bindParam(':pseudo', $pseudo);
  $insertUser->bindParam(':mail', $mail);
  $insertUser->bindParam(':password', $password);
  $insertUser->bindParam(':confirmPwd', $confirmPwd);

  $pseudo = $_SESSION['pseudo'];
  $mail = $_SESSION['mail'];
  $password = hashedPassword($_SESSION['password']);
  $confirmPwd = hashedPassword($_SESSION['confirmPwd']);
  
  $insertUser->execute();


} catch (Exception $e) {
  die('Erreur . ' . $e->getMessage());
}




function hashedPassword($password)
{
  $password = hash('sha1', $password);
  return $password;
}



