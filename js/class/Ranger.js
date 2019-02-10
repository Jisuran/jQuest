class Ranger extends Personnage {
  constructor(nom){
    super(nom);
    this.attaque = 4;
    this.defense = 0;
  }
  
  tireSur(cible){
    super.tireSur(cible);
  }
}