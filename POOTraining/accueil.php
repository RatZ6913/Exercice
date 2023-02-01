<?php

require_once __DIR__ . './core/autoload.php';
require_once __DIR__ . './core/parameters/weapons.parameter.php';
require_once __DIR__ . './core/parameters/form.parameter.php';
require_once __DIR__ . './core/database/bdd.php';

?>

<html lang="fr">
<?php
$style = "./public/css/style.css";
require_once __DIR__ . './common/header.php';
?>


<body>
  <h1>Bonjour Jeune Padawan '<span id="nameUser"><?= $pseudo; ?></span>' !</h1>
  <section id="container">
    <h2>Quelle arme aimeriez-vous obtenir ?</h2>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <select name="weapons" id="weapon" selected>
        <option value="weapons" name="default">--Choisissez votre arme--</option>
        <?= selectWeapons($typesOfWeapons); ?>
      </select>
      <input type="submit" value="Valider" name="submit">
    </form>
    <div>
      <?= textWeaponsChoosen($typesOfWeapons); ?>
      <div id="boxImg">
        <?= showImgFromThisWeapon($typesOfWeapons, $arrWeaponsImage); ?>
        <p style="color:brown"><?= showDescription($typesOfWeapons); ?></p>
      </div>
    </div>
  </section>

  <section id="mid-page">
    <h2>Petit Quizz</h2>
    <p>Votre arme est actuellement de </p>
  </section>

</body>

</html>