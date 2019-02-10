class Colossus extends Personnage {
  constructor(nom){
    super(nom);
    this.attaque = 2;
    this.defense = 2;
		this.initiative = 1.1;
  }
  
  tireSur(cible){
    super.tireSur(cible);
  }
}