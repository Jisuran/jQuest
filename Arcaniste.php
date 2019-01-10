<?php
class Arcaniste extends Personnage{

  protected $armure = 100;
  protected $atk = 22;

  public function attaque($cible){
    if($cible->getArmure() > 0 && $cible->getArmure() > $this->atk){
      $cible->setArmure($cible->getArmure() - $this->atk);
    }else if($cible->getArmure() > 0 && $cible->getArmure() < $this->atk){
      $cible->setArmure($cible->getArmure() - $this->atk);
      $cible->setVie($cible->getVie() + $cible->getArmure());
      $cible->setArmure(0);
    }else{
      $cible->setVie($cible->getVie() - $this->atk);
    }
  }

  public function getArmure(){
    return $this->armure;
  }

  public function setArmure($armure){
    $this->armure = $armure;
  }
  
}
?>