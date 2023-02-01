<?php
session_start();

if (empty($_SESSION['pseudo']) && empty($_SESSION['email']) && empty($_SESSION['id'])) {
  header('location: ./connexion.php');
  echo "Veuillez vous connecter";
} else {
  $pseudoSess = $_SESSION['pseudo'];
  $emailSess = $_SESSION['email'];
  $idUsers = $_SESSION['idUser'] ?? '';
}

require_once __DIR__ . './core/database/parameters/database.php';
include_once __DIR__ . './public/common/head.php';



?>




<title><?= $title  = 'Page de connexion'; ?></title>

<?php include_once __DIR__ . './public/common/header.php'; ?>

<body>
  <div>
    <h1>Page d'accueil</h1>
  </div>

  <section>
    <h3>Bravo <span class="pseudo"><?= $pseudoSess; ?></span> ! Vous savez utilisez un formulaire.</h3>
    <h3>Votre email est : <span class="email"><?= $emailSess; ?></span> !</h3>
  </section>

</body>