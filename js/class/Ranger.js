class Ranger extends Personnage {
  constructor(nom){
    super(nom);
    this.attaque = 4;
    this.defense = 0;
		this.initiative = 1.3;
  }
  
  tireSur(cible){
    super.tireSur(cible);
  }
}