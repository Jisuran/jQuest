  <div class="container my-2">
    <div class="row">
      <?php
        for ($fiche_perso=1; $fiche_perso <= 2; $fiche_perso++) { ?>
      <div class="col-6">
        <form class="form-control">
          <h1 class="text-center">Fiche personnage °<?php echo $fiche_perso ?></h1>
          <div class="form-group">
            <h2 class="ml-3">Nom :</h2>
            <input type="text"  class="form-control" name="personnage[1][nom]" id="nom_perso_1">
          </div>
          <div class="form-group">
            <h3 class="ml-3">Classe :</h3>
            <select class="form-control" name="personnage[1][classe]" id="classe_perso_1"></select>
          </div>
          <button type="button" class="form-control btn btn-primary" id="bouton_perso_1">Valider</button>
        </form>
      </div>
    <?php } ?>
  </div>