<?php

const ERROR_INPUT = "Ce champ est vide...";
const ERROR_LENGHT = "Pas assez de caractères...";
const ERROR_CARD = "Veuillez rentrer 16 chiffres...";
const ERROR_CVV = "Veuillez rentrer 3 chiffres...";

$patternCard = '/4[0-9]{12}(?:[0-9]{3})?/';
$patternCVV = '/^[0-9]{3,3}$/';

$errors = [
  'lastName' => '',
  'firstName' => '',
  'card' => '',
  'cvv' => ''
];

if ($_SERVER['REQUEST_METHOD'] === "POST") {

  $input = filter_input_array(
    INPUT_POST,
    [
      'lastName' => FILTER_SANITIZE_SPECIAL_CHARS,
      'firstName' => FILTER_SANITIZE_SPECIAL_CHARS,
      'card' => FILTER_SANITIZE_NUMBER_INT,
      'cvv' => FILTER_SANITIZE_NUMBER_INT
    ]
  );

  $lastName = $input['lastName'] ?? '';
  $firstName = $input['firstName'] ?? '';
  $card = $input['card'] ?? '';
  $cvv = $input['cvv'] ?? '';

  if (empty($lastName)) {
    $errors['lastName'] = ERROR_INPUT;
  } else if (strlen($lastName) <= 2) {
    $errors['lastName'] = ERROR_LENGHT;
  }

  if (empty($firstName)) {
    $errors['firstName'] = ERROR_INPUT;
  } else if (strlen($firstName) <= 2) {
    $errors['firstName'] = ERROR_LENGHT;
  }

  if (empty($card)) {
    $errors['card'] = ERROR_INPUT;
  }
  if (!preg_match($patternCard, $card)) {
    $errors['card'] = ERROR_CARD;
  }

  if (empty($cvv)) {
    $errors['cvv'] = ERROR_INPUT;
  }
  if (!preg_match($patternCVV, $cvv)) {
    $errors['cvv'] = ERROR_CVV;
  }

  if (!array_filter($errors)) {
    $cookies = [
      'lastName' => $lastName,
      'card' => $card,
      'cvv' => $cvv
    ];

      foreach ($cookies as $key => $value) {
        setcookie($key, $value, time() + (60 * 10), "/");
      }
    
    header('Location: ./accueil.php');
  }
}






