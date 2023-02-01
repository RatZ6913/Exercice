<?php

//  Variable qui aura comme clé les types d'armes, avec sa valeur : $saClasseRespective
$typesOfWeapons = [
  "Épée" => $sword,
  "Arc" => $bow,
  "Hâche" => $ax,
  "Fléau" => $flail
];

$arrWeaponsImage = [
  $imageSword,
  $imageBow,
  $imageAx,
  $imageFlail
];

function selectWeapons($typesOfWeapons)
{
  foreach (array_keys($typesOfWeapons) as $nameOfweapon) {
    echo "<option value=" . $nameOfweapon . ">$nameOfweapon</option>";
  }
}

function textWeaponsChoosen($typesOfWeapons)
{
  foreach ($typesOfWeapons as $weapon => $type) {
    if (empty($_POST)) {
      return '<h3 style="color:black"> Veuillez vous équipez </h3>';
    }
    if ($_POST['weapons'] == $weapon) {
      return '<h3 style="color:black">' .  $type->typeWeapon() . '</h3>';
    }
  }
}

function showImgFromThisWeapon($typesOfWeapons, $arrImages)
{
  $count = -1;
  foreach ($typesOfWeapons as $weapons => $imageOfWeapon) {
    $count++;
    if (empty($_POST)) {
      return null;
    }
    if ($_POST['weapons'] == $weapons) {
      return $imageOfWeapon->imagePerLevel($arrImages[$count]);
    }
  }
}

function showDescription($typesOfWeapons)
{
  foreach ($typesOfWeapons as $textWeapon => $value) {
    if (empty($_POST)) {
      return null;
    }
    if ($_POST['weapons'] == $textWeapon) {
      return $value->description();
    }
  }
}
