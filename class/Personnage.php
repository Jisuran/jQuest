<?php

class Personnage{

  protected $nom;
  protected $vie 					= 10;
  protected $armure				= 10;
  protected $attaque			= 0;
	protected $resistance		= 0;
	
	/**
	 * @param string $nom
	 * crée un objet personnage avec un nom
	 */
	public function __construct($nom){
		$this->setNom($nom); ;
	}

	/**
	 * @param Personnage $cible
	 * calcule les points d'armure ou de vie perdu(s)
	 * 		en cas de mort, la partie prend fin.
	 */
	public function attaque($cible){

		if($cible->getResistance() < $this->attaque){
			$cible->setArmure($cible->getArmure() - ($this->attaque - $cible->getResistance()));
		}else{
			$cible->setArmure($cible->getArmure() - 1);
		}

		if($cible->getArmure() < 0){
			$cible->setVie($cible->getVie() + $cible->getArmure());
			$cible->setArmure(0);
		}

		if($cible->getVie() <= 0){
			$cible->setVie(0);
			$cible->mort($this);
		}
  }

	/**
	 * @param Personnage $attaquant
	 * notification de fin de match
	 */
	public function mort($attaquant){
		echo $attaquant->getNom().' a tué '.$this->nom.'.';
	}
	
	public function setVie($vie){ $this->vie=$vie; 		}
	public function getVie()		{ return $this->vie; 	}
	
	public function setArmure($armure){ $this->armure=$armure; 	}
	public function getArmure()				{ return $this->armure; 	}

	public function setAttaque($attaque){ $this->attaque = $attaque; 	}
	public function getAttaque()				{ return $this->attaque; 			}

	public function setResistance($resistance){ $this->resistance = $resistance; 	}
	public function getResistance()						{ return $this->resistance; 				}

	public function setNom($nom){ $this->nom = $nom; }
	public function getNom()		{ return $this->nom; }

}
?>