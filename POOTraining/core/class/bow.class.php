<?php

require_once __DIR__ . './weapon.class.php';


class Bow extends Weapon
{

  private $bowDamage;

  public function __construct($type, $range, $bowDamage, $description, $image)
  {
    parent::__construct($type, $range, $description, $image);
    $this->bowDamage = $bowDamage;
  }

  public function getBowAttack()
  {
    $this->bowDamage += $this->attackBase;
    return "Votre  " . $this->type . " a pour total " . $this->bowDamage . " points d'attaque !";
  }

  public function description()
  {
    return $this->description;
  }

  public function imagePerlevel($image)
  {
    $this->image = $image;

    foreach ($this->image as $index => $value) {
      if ($this->level == $index) {
        return "<img src=" . $value . ">";
      }
    }
  }

  public function weaponLevelUp()
  {
    if ($this->level <= count($this->image)) {
      $this->level += 1;
      return "Cette arme a gagné 1 niveau et est maintenant de niveau : " . $this->level;
    } else {
      return "Vous ne pouvez plus augmenter de niveaux";
    }
  }
}
