<?php

require_once __DIR__ . './core/database/bdd.php';
require_once __DIR__ . './core/database/registerDB.php';
include_once __DIR__ . './public/common/head.php';

?>




<title><?= $title  = 'Page d\'inscription'; ?></title>

<?php include_once __DIR__ . './public/common/header.php'; ?>

<body>
  <div>
    <h1>Page d'inscription</h1>
  </div>

  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo" value="<?= $pseudo ?? ''; ?>" placeholder="Pseudo...">
    </div>
    <p class="errorsMsg"><?= $errors['pseudo'] ?? ''; ?></p>

    <div>
      <label for="password">Mot de passe :</label>
      <input type="text" name="password" id="password" value="<?= $password ?? ''; ?>" placeholder="Mot de passe...">
    </div>
    <p class="errorsMsg"><?= $errors['password'] ?? ''; ?></p>
    <div>
      <label for="confirmPass">Confirmez votre mot de passe :</label>
      <input type="text" name="confirmPass" id="confirmPass" value="<?= $confirmPass ?? ''; ?>" placeholder="Confirmez mot de passe...">
    </div>
    <p class="errorsMsg"><?= $errors['confirmPass'] ?? ''; ?></p>
    <div>
      <label for="email">Email :</label>
      <input type="text" name="email" id="email" value="<?= $email ?? ''; ?>" placeholder="Email...">
    </div>
    <p class="errorsMsg"><?= $errors['email'] ?? ''; ?></p>
    <div>
      <input type="submit" name="submit" value="S'inscrire">
    </div>

  </form>

</body>