class Storm extends Personnage {
  constructor(nom){
    super(nom);
    this.attaque = 3;
    this.defense = 1;
		this.initiative = 1.2;
  }

  tireSur(cible){
    super.tireSur(cible);
  }
}