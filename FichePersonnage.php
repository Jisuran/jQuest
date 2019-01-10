<?php 
	class FichePersonnage{
		
		
		
		public function __construct($personnage){
			
			return personnageForm($personnage);
			
		}
		public static function personnageForm($personnage){

			echo 	'<div class="container-fluid personnage ">'.
						'<div class="row">'.
							'<div class="col-2" >'.
								'<label>'.$personnage->getNom().'</label>'.
							'</div>'.
						'</div>'.
						'<div class="row">'.
							'<div class="col-2" >'.
								'<label>'.$personnage->getArmure().' </label>'.
							'</div>'.
						'</div>'.
						'<div class="row">'.
							'<div class="col-2" >'.
								'<label>'.$personnage->getVie().' </label>'.
							'</div>'.
						'</div>'.
					'</div>';
			
		}
		
	}
?>