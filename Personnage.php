<?php

class Personnage{
  
  protected $vie = 100 ;
  protected $atk = 20;
  protected $nom;
	
	public function setVie($vie){
		
		$this->vie=$vie;
		
	}
	public function __construct($nom){
		
		$this->nom = $nom ;
	}
	public function attaque($cible){
		
		$cible->vie -= $this->atk ;
	
	}
	public function mort(){
		
		if ($this->vie<=0){
			
			return $this->nom.' est mort. RIP' ;
		}
		else {
			
			return $this->nom. "n'est pas mort , il lui reste ".$this->vie." point de vie";
			
		}
	}
	
}
?>