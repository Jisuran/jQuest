<?php

class Personnage{
  
  protected $vie = 100 ;
  protected $atk = 20;
  protected $nom;
	
	
	public function __construct($nom){
		
		$this->nom = $nom ;
	}
	public function attaque($cible){
		
		$cible->vie -= $this->atk ;
	
	}
	
}
?>