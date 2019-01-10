<?php 
	class FichePersonnage{
		
		
		
		public function __construct($personnage){
			
			return personnageForm($personnage);
			
		}
		public static function personnageForm($personnage){

			<div class="personnage" >
			 <label> Vie de $personnage->getNom() : $personnage->getVie </label>
			</div>
		}
		
	}
?>