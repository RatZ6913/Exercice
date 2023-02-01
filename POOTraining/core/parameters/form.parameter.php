<?php

const ERROR_EMPTY_INPUT = "Ce champ est vide !";
const ERROR_TOO_SHORT = "Pas assez de caractères !";
const ERROR_MATCH_PASSWORD = "Vos mots de passes ne correspondent pas !";

if (!session_id()) {
  session_start();
} else {
  session_destroy();
}


foreach ($_POST as $key => $value) {
  $_SESSION[$key] = $value;
}

$errors = [
  'pseudo' => '',
  'mail' => '',
  'password' => '',
  'confirmPwd' => ''
];

$pseudo = $_POST['pseudo'] ?? '';
$mail = $_POST['mail'] ?? '';
$password =  $_POST['password'] ?? '';
$confirmPwd = $_POST['confirmPwd'] ?? '';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $input = filter_input_array(INPUT_POST, [
    'pseudo' => FILTER_SANITIZE_SPECIAL_CHARS,
    'mail' => FILTER_SANITIZE_EMAIL,
    'password' => FILTER_SANITIZE_SPECIAL_CHARS,
    'confirmPwd' => FILTER_SANITIZE_SPECIAL_CHARS
  ]);

  $pseudo = stripslashes(trim($input['pseudo']));
  $mail = $input['mail'];
  $password = stripslashes(trim($input['password']));
  $confirmPwd = stripslashes(trim($input['confirmPwd']));

  if (empty($pseudo)) {
    $errors['pseudo'] = ERROR_EMPTY_INPUT;
  } else if (strlen($pseudo) <= 2) {
    $errors['pseudo'] = ERROR_TOO_SHORT;
  }

  if (empty($mail)) {
    $errors['mail'] = ERROR_EMPTY_INPUT;
  } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errors['mail'] = "L'adresse mail n'est pas valide";
  }

  if (empty($password)) {
    $errors['password'] = ERROR_EMPTY_INPUT;
  } else if (strlen($password) <= 4) {
    $errors['password'] = ERROR_TOO_SHORT;
  } 

  if (empty($confirmPwd)) {
    $errors['confirmPwd'] = ERROR_EMPTY_INPUT;
  } else if (strlen($confirmPwd) <= 4) {
    $errors['confirmPwd'] = ERROR_TOO_SHORT;
  } else if ($confirmPwd !== $password) {
    $errors['confirmPwd'] = ERROR_MATCH_PASSWORD;
  }

  foreach (array_keys($errors) as $key) {
    if (empty($errors)) {
      $errors = '';
    }
  }

  if ((!empty($pseudo) && $errors['pseudo'] == '')
    && (!empty($mail) && $errors['mail'] == '')
    && (!empty($password) && $errors['password'] == '')
    && (!empty($confirmPwd) && $errors['confirmPwd'] == '')
  ) {
    header('location: ./accueil.php');
  }
}

// <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ? >" method="POST">


