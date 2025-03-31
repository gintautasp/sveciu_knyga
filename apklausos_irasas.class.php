<?php

	class ApklausosIrasas extends ModelDbIrasas {
	
		public function __construct() {
		
			parent::__construct();
		}
		
		public function issaugotiDuomenuBazeje() {
	
			$svecio_irasas = array();
			
			foreach ( $_POST as $pav => $reiksme ) {
			
				if ( is_array ( $reiksme ) ) {
				
					$svecio_irasas[ $pav ] = implode ( '|', $reiksme );
					
				} else {
				
					$svecio_irasas[ $pav ] =  $this -> db -> ercl_db -> real_escape_string( $reiksme );
				}
			}	
		
			$this -> db -> uzklausa (
					"
				INSERT INTO `apklausa` ( `vardas`, `zinute`, `lytis`, `veikla`, `priemone`, `kita_priemone`,`prekiaus`, `kitos_prekes` ) VALUES (
						'" . $svecio_irasas [ 'vardas' ] . "', '" 
						. $svecio_irasas [ 'zinute' ] . "', '" 
						. $svecio_irasas [ 'lytis' ] . "', '" 
						. $svecio_irasas [ 'veikla' ] . "','" 
						. $svecio_irasas [ 'priemone' ] . "','" 
						. $svecio_irasas [ 'kita_priemone' ] . "','" 
						. $svecio_irasas [ 'prekiaus' ] . "', '"
						. $svecio_irasas [ 'kitos_prekes' ] . "'
					)
					" 
			);
		}	
	}