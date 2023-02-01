<?php

if (
  !empty($_COOKIE['lastName']) &&
  !empty($_COOKIE['card']) &&
  !empty($_COOKIE['cvv'])
) {
  header('location: ./accueil.php');
}

require_once __DIR__ . './validForm.php';

?>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .errors {
    color: red;
  }
</style>

<body>

  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
      <label for="lastName">Nom :</label>
      <input type="text" name="lastName" id="lastName" value="<?= $lastName ?? '' ?>">
      <p class="errors"><?= $errors['lastName']; ?></p>
    </div>
    <div>
      <label for="firstName">Prénom :</label>
      <input type="text" name="firstName" id="firstName" value="<?= $firstName ?? '' ?>">
      <p class="errors"><?= $errors['firstName']; ?></p>
    </div>
    <div>
      <label for="card">CB Visa :</label>
      <input type="text" name="card" id="card" value="<?= $card ?? '' ?>">
      <p class="errors"><?= $errors['card']; ?></p>
    </div>
    <div>
      <label for=" cvv">CVV :</label>
      <input type="text" name="cvv" id="cvv" value="<?= $cvv ?? '' ?>">
      <p class="errors"><?= $errors['cvv']; ?></p>
    </div>
    <input type="submit" name="submit">
  </form>
  <!-- < ?= htmlspecialchars($_SERVER['PHP_SELF']); ?> -->
</body>

</html>
