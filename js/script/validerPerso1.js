$('#bouton_perso_1').on('click', function () {
  var nom_1     = $('#nom_perso_1').val();
  var classe_1  = $('#classe_perso_1').val();

  if(nom_1 != '' && classe_1 != 'Veuillez choisir une classe'){
    $('#fiche_creation_perso_1').addClass('hide');

    switch (classe_1) {
      case 'Colossus':  var perso_1 = new Colossus(nom_1);  break;
      case 'Ranger':    var perso_1 = new Ranger(nom_1);    break;
      case 'Storm':     var perso_1 = new Storm(nom_1);     break;
    }

    $('#nom_combat_perso_1').html(nom_1);
    $('#classe_combat_perso_1').html(classe_1);
    $('#armure_1').attr('aria-valuenow', 10);
    $('#armure_1').attr('aria-valuemax', 10);
    $('#armure_1').html(10);





    $('#fiche_combat_perso_1').removeClass('hide');
  }
});

$('#fiche_creation_perso_1').addClass('hide');
$('#fiche_combat_perso_1').removeClass('hide');

var perso_1 = new Storm('nom_1');

$('#armure_1').attr('aria-valuenow', 10);
$('#armure_1').attr('aria-valuemax', 10);
$('#armure_1').html(10);

perso_1.tireSur(perso_1);

modifierArmureVie();

function modifierArmureVie(){
  var armure_1          = perso_1.getArmure();
  var max_armure_1      = Number($('#armure_1').attr('aria-valuemax'));
  var pourcent_armure_1 = armure_1 * 100 / max_armure_1;
  $('#armure_1').attr('aria-valuenow', armure_1);
  $('#armure_1').html(armure_1);
  $('#armure_1').attr('style', 'width: '+pourcent_armure_1+'%;');
  
  var vie_1          = perso_1.getVie();
  var max_vie_1      = Number($('#vie_1').attr('aria-valuemax'));
  var pourcent_vie_1 = vie_1 * 100 / max_vie_1;
  $('#vie_1').attr('aria-valuenow', vie_1);
  $('#vie_1').html(vie_1);
  $('#vie_1').attr('style', 'width: '+pourcent_vie_1+'%;');
  
  var armure_2          = perso_2.getArmure();
  var max_armure_2      = Number($('#armure_2').attr('aria-valuemax'));
  var pourcent_armure_2 = armure_2 * 100 / max_armure_2;
  $('#armure_2').attr('aria-valuenow', armure_2);
  $('#armure_2').html(armure_2);
  $('#armure_2').attr('style', 'width: '+pourcent_armure_2+'%;');
  
  var vie_2          = perso_2.getVie();
  var max_vie_2      = Number($('#vie_2').attr('aria-valuemax'));
  var pourcent_vie_2 = vie_2 * 100 / max_vie_2;
  $('#vie_2').attr('aria-valuenow', vie_2);
  $('#vie_2').html(vie_2);
  $('#vie_2').attr('style', 'width: '+pourcent_vie_2+'%;');

}