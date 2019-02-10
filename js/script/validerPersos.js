$('#bouton_perso_1').on('click', function () {
  var nom_1     = $('#nom_perso_1').val();
  var classe_1  = $('#classe_perso_1').val();
  var special_1 = '';

  if(nom_1 != '' && classe_1 != 'Veuillez choisir une classe'){
    $('#fiche_creation_perso_1').addClass('hide');

    switch (classe_1) {
      case 'Colossus':  perso_1 = new Colossus(nom_1);  special_1 = 'armor';  break;
      case 'Ranger':    perso_1 = new Ranger(nom_1);    special_1 = 'run';    break;
      case 'Storm':     perso_1 = new Storm(nom_1);     special_1 = 'iris';   break;
    }

    var armure_1 = perso_1.getArmure();
    var vie_1 = perso_1.getVie();
    $('#nom_combat_perso_1').html(nom_1);
    $('#classe_combat_perso_1').html(classe_1);
    $('#armure_1').attr('aria-valuenow', armure_1);
    $('#armure_1').attr('aria-valuemax', armure_1);
    $('#armure_1').html(armure_1);
    $('#vie_1').attr('aria-valuenow', vie_1);
    $('#vie_1').attr('aria-valuemax', vie_1);
    $('#vie_1').html(vie_1);
    $('#special_1').find('img').attr('src', 'assets/ico/'+special_1+'.png');
    $('#fiche_combat_perso_1').removeClass('hide');
  }
});

$('#bouton_perso_2').on('click', function () {
  var nom_2     = $('#nom_perso_2').val();
  var classe_2  = $('#classe_perso_2').val();
  var special_2 = '';

  if(nom_2 != '' && classe_2 != 'Veuillez choisir une classe'){
    $('#fiche_creation_perso_2').addClass('hide');

    switch (classe_2) {
      case 'Colossus':  perso_2 = new Colossus(nom_2);  special_2 = 'armor';  break;
      case 'Ranger':    perso_2 = new Ranger(nom_2);    special_2 = 'run';    break;
      case 'Storm':     perso_2 = new Storm(nom_2);     special_2 = 'iris';   break;
    }

    var armure_2 = perso_2.getArmure();
    var vie_2 = perso_2.getVie();
    $('#nom_combat_perso_2').html(nom_2);
    $('#classe_combat_perso_2').html(classe_2);
    $('#armure_2').attr('aria-valuenow', armure_2);
    $('#armure_2').attr('aria-valuemax', armure_2);
    $('#armure_2').html(armure_2);
    $('#vie_2').attr('aria-valuenow', vie_2);
    $('#vie_2').attr('aria-valuemax', vie_2);
    $('#vie_2').html(vie_2);
    $('#special_2').find('img').attr('src', 'assets/ico/'+special_2+'.png');
    $('#fiche_combat_perso_2').removeClass('hide');
  }
});