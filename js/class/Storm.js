class Storm extends Personnage {
  constructor(nom){
    super(nom);
    this.attaque = 3;
    this.defense = 1;
  }

  tireSur(cible){
    super.tireSur(cible);
  }
}