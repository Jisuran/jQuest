<div class="container my-2">
  <div class="row">
    <?php
      for ($fiche_perso=1; $fiche_perso <= 2; $fiche_perso++) { ?>
    <div class="col-6">
      <form class="form-control" id="fiche_perso_<?php echo $fiche_perso; ?>">
        <h1 class="text-center">Fiche personnage °<?php echo $fiche_perso; ?></h1>
        <div class="form-group">
          <h2 class="ml-3">Nom :</h2>
          <input type="text"  class="form-control" name="personnage[1][nom]" id="nom_perso_1" placeholder="Veuillez entrer un nom de personnage">
        </div>
        <div class="form-group">
          <h3 class="ml-3">Classe :</h3>
          <select class="form-control" name="personnage[1][classe]" id="classe_perso_1">
            <option>Veuillez choisir une classe</option>
            <option value="Titan">Titan</option>
            <option value="Chasseur">Chasseur</option>
            <option value="Arcaniste">Arcaniste</option>
          </select>
        </div>
        <button type="button" class="form-control btn btn-primary" id="bouton_perso_1">Valider</button>
      </form>
    </div>
  <?php } ?>
</div>

<script src="js/class/Personnage.js"></script>
<script src="js/class/Titan.js"></script>
<script src="js/class/Chasseur.js"></script>
<script src="js/class/Arcaniste.js"></script>
<script>
  var perso_1 = new Titan('nemesis');
  alert(perso_1.nom+' - '+perso_1.vie+' - '+perso_1.armure+' - ');
</script>