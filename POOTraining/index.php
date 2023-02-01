<?php
require_once __DIR__ . './core/database/database.php';
require_once __DIR__ . './core/parameters/form.parameter.php';


?>

<html lang="fr">
<?php
$style = "./public/css/form.style.css";
require_once __DIR__ . './common/header.php'; 
?>

<body>

  <section>
    <h1>Bienvenue dans l'aventure</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <div>
        <label for="pseudo">Votre pseudo :</label>
        <input type="pseudo" id="pseudo" name="pseudo" value="<?= $pseudo ; ?>" placeholder="2 minimums characters...">
        <p class="errorsMsg"><?= $errors['pseudo']; ?></p>
      </div>
      <div>
        <label for="mail">Votre mail :</label>
        <input type="text" id="mail" name="mail" value="<?= $mail; ?>" placeholder="Please type a valid email...">
        <p class="errorsMsg"><?= $errors['mail']; ?> </p>
      </div>
      <div>
        <label for="password" name="password">Votre mot de passe</label>
        <input type="password" id="password" name="password" placeholder="5 minimums characters...">
        <p class="errorsMsg"><?= $errors['password']; ?> </p>
      </div>
      <div>
        <label for="confirmPwd">Confirmez votre mot de passe :</label>
        <input type="password" id="confirmPwd" name="confirmPwd" placeholder="5 minimums characters...">
        <p class="errorsMsg"><?= $errors['confirmPwd']; ?> </p>
      </div>
      <div>
        <input type="submit" name="submit" id="submit" value="Valider">
      </div>
    </form>
  </section>

</body>
</html>