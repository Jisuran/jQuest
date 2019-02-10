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
          <button type="button" class="form-control btn btn-primary" id="bouton_perso_<?php echo $fiche_perso; ?>">Prêt</button>
        </div>
        <div id="fiche_combat_perso_<?php echo $fiche_perso; ?>" class="hide">
          <h1 id="nom_combat_perso_<?php echo $fiche_perso; ?>" class="text-center"></h1>
          <h2 id="classe_combat_perso_<?php echo $fiche_perso; ?>" class="text-center"></h2>
          <div class="form-group">
            <div class="container">
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
              </div>
            </div>
            <div class="container mt-4">
              <div class="row text-center mb-3">
                <div class="col-8 offset-2">
                  <button type="button" disabled id="attaque_<?php echo $fiche_perso; ?>" class="form-control btn btn-tirer btn-<?php echo $fiche_perso; ?> btn-primary" id="bouton_perso_<?php echo $fiche_perso; ?>">Tirer<br/><img src="assets/ico/target.png" alt=""></button>
                </div>
              </div>
              <div class="row text-center mb-3">
                <div class="col-4">
                <button type="button" disabled id="grenade_<?php echo $fiche_perso; ?>" class="form-control btn btn-<?php echo $fiche_perso; ?> btn-primary" id="bouton_perso_<?php echo $fiche_perso; ?>">Grenade<br/><img src="assets/ico/explosion.png" alt="" class="w-100 px-2"></button>
                </div>
                <div class="col-4">
                <button type="button" disabled id="special_<?php echo $fiche_perso; ?>" class="form-control btn btn-<?php echo $fiche_perso; ?> btn-primary" id="bouton_perso_<?php echo $fiche_perso; ?>">Spécial<br/><img src alt="" class="w-100 px-2"></button>
                </div>
                <div class="col-4">
                <button type="button" disabled id="ulti_<?php echo $fiche_perso; ?>" class="form-control btn btn-<?php echo $fiche_perso; ?> btn-primary" id="bouton_perso_<?php echo $fiche_perso; ?>">Ulti<br/><img src="assets/ico/chrome.png" alt="" class="w-100 px-2"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  <?php } ?>
  <div class="row w-100 mx-5 my-4">
    <div id="commencer" class="col-12 hide-1 hide-2">
      <button id="btn-commencer" type="button" class="btn btn-lg form-control btn-primary w-100 large-text">Commencer !</button>
    </div>
  </div>
</div>

<script src="js/class/Personnage.js"></script>
<script src="js/class/Colossus.js"></script>
<script src="js/class/Ranger.js"></script>
<script src="js/class/Storm.js"></script>
<script src="js/script/validerPersos.js"></script>
<script src="js/script/initiative.js"></script>
<script src="js/script/combat.js"></script>