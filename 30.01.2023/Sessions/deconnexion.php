<?php

if (empty(session_id())) {
  session_start();
}

if (empty($_SESSION['count'])) {
  $_SESSION['count'] = 1;
} else {
  $_SESSION['count']++;
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['submit'])) {
    session_destroy();
    header('location: ./index.php');
  }
}

?>

<body>
  <h1>Page de Déconnexion</h1>
  <p>Pages visité : <?= $_SESSION['count']; ?></p>
  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <input type="submit" name="submit" value="Déconnexion">
  </form>

</body>