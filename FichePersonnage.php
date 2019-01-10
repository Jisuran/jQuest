<?php 
	class FichePersonnage{
		
		
		
		public function __construct($personnage){
			
			return personnageForm($personnage);
			
		}

		/**
		 * bientôt DO, pour l'instant écrit en brut
		 */
		public static function personnageForm($personnage){

			echo 	'<div class="container personnage list-group mb-3">'.
						'<div class="row">'.
							'<div class="col-2 list-group-item" >'.
								'<label>Nom du personnage</label>'.
							'</div>'.
							'<div class="col-2 list-group-item" >'.
								'<label>'.$personnage->getNom().'</label>'.
							'</div>'.
						'</div>'.
						'<div class="row">'.
							'<div class="col-2 list-group-item" >'.
								'<label>Armure</label>'.
							'</div>'.
							'<div class="col-2 list-group-item" >'.
								'<label>'.$personnage->getArmure().'</label>'.
							'</div>'.
						'</div>'.
						'<div class="row">'.
							'<div class="col-2 list-group-item" >'.
								'<label>Vie</label>'.
							'</div>'.
							'<div class="col-2 list-group-item" >'.
								'<label>'.$personnage->getVie().'</label>'.
							'</div>'.
						'</div>'.
					'</div>';
			
					// echo 	'<div class="container personnage list-group mb-3">'.
					// 	'<div class="row">'.
					// 		'<div class="col-2 list-group-item" >'.
					// 			'<label>Nom du personnage</label>'.
					// 		'</div>'.
					// 		'<div class="col-2 list-group-item" >'.
					// 			'<input name="nom">'.$personnage->getNom().'</label>'.
					// 		'</div>'.
					// 	'</div>'.
					// 	'<div class="row">'.
					// 		'<div class="col-2 list-group-item" >'.
					// 			'<label>Armure</label>'.
					// 		'</div>'.
					// 		'<div class="col-2 list-group-item" >'.
					// 			'<input name="armure">'.$personnage->getArmure().'</label>'.
					// 		'</div>'.
					// 	'</div>'.
					// 	'<div class="row">'.
					// 		'<div class="col-2 list-group-item" >'.
					// 			'<label>Vie</label>'.
					// 		'</div>'.
					// 		'<div class="col-2 list-group-item" >'.
					// 			'<input name="vie" value="'.$personnage->getVie().'">'.
					// 		'</div>'.
					// 	'</div>'.
					// '</div>';
		}
		
	}
?>