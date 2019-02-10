$('.btn-tirer').on('click', function () {
  if($(this).hasClass('btn-1')){
    var numero  = 1;
    var joueur  = perso_1;
    var cible   = perso_2;
    $('#attaque_1').prop('disabled', true);
    $('#attaque_2').prop('disabled', false);
  }else if($(this).hasClass('btn-2')){
    var numero  = 2;
    var joueur  = perso_2;
    var cible   = perso_1;
    $('#attaque_2').prop('disabled', true);
    $('#attaque_1').prop('disabled', false);
  }
  joueur.tireSur(cible);
});

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