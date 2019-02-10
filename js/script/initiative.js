function initiative(){
  var initiative_1 = Math.floor(Math.random() * 11);
  var initiative_2 = Math.floor(Math.random() * 11);
  var initiative_1 = Math.floor(initiative_1 * perso_1.getInitiative());
  var initiative_2 = Math.floor(initiative_2 * perso_2.getInitiative());
  if(initiative_1 > initiative_2){
    alert(perso_1.getNom()+' commence avec un score d\'initiative de '+initiative_1+' contre '+initiative_2);
    $('#attaque_1').prop('disabled', false);
  }else if(initiative_1 < initiative_2){
    alert(perso_2.getNom()+' commence avec un score d\'initiative de '+initiative_2+' contre '+initiative_1);
    $('#attaque_2').prop('disabled', false);
  }else{
    initiative();
  }
}