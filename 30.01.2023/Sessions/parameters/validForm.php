<?php

const ERROR_INPUT = "Champ invalide";

$errors = [
  'pseudo' => '',
  'password' => ''
];


if ($_SERVER['REQUEST_METHOD'] === "POST") {

  if (empty(session_id())) {
    session_start();
  }

  $input = filter_var_array($_POST, [
    'pseudo' => FILTER_SANITIZE_SPECIAL_CHARS,
    'password' => FILTER_SANITIZE_SPECIAL_CHARS,
  ]);

  $pseudo = $input['pseudo'];
  $password = $input['password'];

  if (empty($pseudo)) {
    $errors['pseudo'] = ERROR_INPUT;
  }

  if (empty($password)) {
    $errors['password'] = ERROR_INPUT;
  }

  foreach ($errors as $key => $value) {
    if ($value == "") {
      $_SESSION['access_granted'] = "Ok";
      header('location: ./accueil.php');
    }
  }
}
