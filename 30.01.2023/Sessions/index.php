<?php

if (empty(session_id())) {
  session_start([
    'cookie_lifetime' => 600
  ]);
}

$_SESSION['access_granted'] = "Refused";

if(empty($_SESSION['count'])){
  $_SESSION['count'] = 1;
} else {
  $_SESSION['count']++;
}

require_once __DIR__ . './parameters/validForm.php';




?>

<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Page de connexion</h1>
  <p>Pages visité : <?= $_SESSION['count']; ?></p>

  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
      <label for="pseudo">Pseudo : </label>
      <input type="text" name="pseudo" id="pseudo">
    </div>
    <div>
      <label for="password">Password : </label>
      <input type="text" name="password" id="password">
    </div>
    <input type="submit" name="submit" value="Valider">
  </form>
</body>

</html>