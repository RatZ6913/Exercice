<?php

require_once __DIR__ . './parameters/validForm.php';

if(!session_id()){
  session_start();
}

if($_SESSION['access_granted'] !== "Ok"){
  header('location: ./index.php');
}

if(empty($_SESSION['count'])){
  $_SESSION['count'] = 1;
} else {
  $_SESSION['count']++;
}

var_dump($_SESSION);

?>


<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
</head>
<body>
  <h1>Bienvenu sur la page d'accueil</h1>
  <p>Pages visité : <?= $_SESSION['count']; ?></p>

  <div>
    <h2>Pour vous déconnecter cliquez ici !</h2>
    <a href="./deconnexion.php">Page de déconnexion</a>
  </div>
</body>
</html>
