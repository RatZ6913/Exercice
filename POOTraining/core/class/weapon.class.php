<?php

class Weapon
{

  protected $type;
  protected $attackBase = 10;
  protected $level = 0;
  protected $image = [];
  protected $description;
  protected $range;

  protected function __construct($type, $range, $description)
  {
    $this->type = $type;
    $this->range = $range;
    $this->description = $description;
  }

  protected function baseAttack($attack)
  {
    $this->attackBase += $attack;
    return "Cette arme a " . $this->attackBase . " points d'attaques !";
  }

  public function typeWeapon()
  {
    return "Type d'arme choisi : " . $this->type;
  }
}
