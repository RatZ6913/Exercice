<?php

spl_autoload_register(function ($class) {
  require_once 'core/class/' . $class . '.class.php';
});

$imageSword = [
  "././public/ressources/img/epee/epee1.png",
  "././public/ressources/img/epee/epee2.png",
  "././public/ressources/img/epee/epee3.png",
  "././public/ressources/img/epee/epee4.png",
  "././public/ressources/img/epee/epee5.png"
];

$imageBow = [
  "././public/ressources/img/arc/arc1.png",
  "././public/ressources/img/arc/arc2.png"
];

$imageAx = [
  "././public/ressources/img/hache/hache1.png",
  "././public/ressources/img/hache/hache2.png",
  "././public/ressources/img/hache/hache3.png",
  "././public/ressources/img/hache/hache4.png",
  "././public/ressources/img/hache/hache5.png"
];

$imageFlail = [
  "././public/ressources/img/fleau/fleau1.png",
  "././public/ressources/img/fleau/fleau2.png",
  "././public/ressources/img/fleau/fleau3.png",
  "././public/ressources/img/fleau/fleau4.png",
  "././public/ressources/img/fleau/fleau5.png"
];



$sword = new Sword("Épée", "Mélée", 35, "Je suis une arme pour les valeureux chevaliers !", $imageSword);
$bow = new Bow('Arc', "Distance", 25, "Je suis une arme qui a besoin de précisions !", $imageBow);
$ax = new Ax('Hâche', "Mélée", 40, "Je suis une arme pour de vrais barbares !", $imageAx);
$flail = new Flail('Fléau', "Mélée", 45, "Je suis une arme pour les guerriers destructeurs !", $imageFlail);









