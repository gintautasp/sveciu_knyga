<?php

	class ApklausosSarasas extends ModelDbSarasas {

		public function __construct() {
		
			parent::__construct();
		}	

		public function gautiSarasaIsDuomenuBazes() {
		
			if ( $this -> db ) {
					
				$query = 
						"
					SELECT * FROM `apklausa` WHERE `ar_rodyti`
						";
				$result = $this -> db -> uzklausa ( $query );
				
				while ( $svecio_irasas = mysqli_fetch_assoc ( $result ) ) {	
				
					$this -> sarasas[] = $svecio_irasas;
				}
			}
		}
	}