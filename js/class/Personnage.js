class Personnage {
  constructor(nom){
    this.nom    		= nom;
		this.armure 		= 10;
    this.vie    		= 10;
		this.attaque 		= 0;
		this.defense 		= 0;
		this.initiative = 1;
  }

  tireSur(cible){

    if(cible.getDefense() < this.attaque){
			cible.setArmure(cible.getArmure() - (this.attaque - cible.getDefense()));
		}else{
			cible.setArmure(cible.getArmure() - 1);
		}

		if(cible.getArmure() < 0){
			cible.setVie(cible.getVie() + cible.getArmure());
			cible.setArmure(0);
		}

		if(cible.getVie() <= 0){
			cible.setVie(0);
			cible.mort(this);
		}
		
    modifierArmureVie();
  }

  /**
	 * @param Personnage attaquant
	 * notification de fin de match
	 */
	mort(attaquant){
		alert(attaquant.getNom()+' a tué '+this.nom+'.');
	}
	
	setVie(vie) { this.vie=vie; 		}
	getVie()	  { return this.vie;  }
	
	setArmure(armure) { this.armure=armure; }
	getArmure()				{ return this.armure; }

	setAttaque(attaque) { this.attaque = attaque; }
	getAttaque()				{ return this.attaque; 		}

	setDefense(defense) { this.defense = defense; }
	getDefense()						{ return this.defense; 			}

	setNom(nom) { this.nom = nom; }
	getNom()		{ return this.nom; }
}