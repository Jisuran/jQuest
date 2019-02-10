<div class="container my-2">
  <div class="row">
    <?php
      for ($fiche_perso=1; $fiche_perso <= 2; $fiche_perso++) { ?>
    <div class="col-6">
      <form class="form-control" id="form-fiche_perso_<?php echo $fiche_perso; ?>">
        <div id="fiche_creation_perso_<?php echo $fiche_perso; ?>">
          <h1 class="text-center">Fiche personnage °<?php echo $fiche_perso; ?></h1>
          <div class="form-group">
            <h2 class="ml-3">Nom :</h2>
            <input type="text"  class="form-control" id="nom_perso_<?php echo $fiche_perso; ?>" placeholder="Veuillez entrer un nom de personnage">
          </div>
          <div class="form-group">
            <h3 class="ml-3">Classe :</h3>
            <select class="form-control" id="classe_perso_<?php echo $fiche_perso; ?>">
              <option>Veuillez choisir une classe</option>
              <option value="Colossus">Colossus</option>
              <option value="Ranger">Ranger</option>
              <option value="Storm">Storm</option>
            </select>
          </div>
          <button type="button" class="form-control btn btn-primary" id="bouton_perso_<?php echo $fiche_perso; ?>">Valider</button>
        </div>
        <div id="fiche_combat_perso_<?php echo $fiche_perso; ?>" class="hide">
          <h1 id="nom_combat_perso_<?php echo $fiche_perso; ?>" class="text-center"></h1>
          <h2 id="classe_combat_perso_<?php echo $fiche_perso; ?>" class="text-center"></h2>
          <div class="form-group form-control">
            <div class="row">
              <div class="col-3 text-center">
                <h3>Armure</h3>
              </div>
              <div class="col-9 pt-2">
                <div class="progress">
                  <div id="armure_<?php echo $fiche_perso; ?>" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 100%">0</div>
                </div>
              </div>
              <div class="col-3 text-center">
                <h3>Vie</h3>
              </div>
              <div class="col-9 pt-2">
                <div class="progress">
                  <div id="vie_<?php echo $fiche_perso; ?>" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 100%">0</div>
                </div>
              </div>
              <div class="container col-12">
                <h2 class="ml-3">fesse :</h2>
                <input type="text"  class="form-control-plaintext text-center" id="nom_perso_<?php echo $fiche_perso; ?>" placeholder="Veuillez entrer un nom de personnage">
              </div>

            </div>
          </div>
        </div>
      </form>
    </div>
  <?php } ?>
</div>

<script src="js/class/Personnage.js"></script>
<script src="js/class/Colossus.js"></script>
<script src="js/class/Ranger.js"></script>
<script src="js/class/Storm.js"></script>
<script src="js/script/validerPersos.js"></script>
<script src="js/script/combat.js"></script>