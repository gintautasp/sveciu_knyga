<?php

	class ApklausaController extends Controller {
	
		public $ar_atsiusti_nauji_atsakymai = false, $apklausos_irasas, $apklausos_sarasas;
	
		public function __construct() {
		
			$this -> apklausos_irasas = new ApklausosIrasas();
			$this -> apklausos_sarasas = new ApklausosSarasas();
		}
		
		public function tikrintiUzklausuDuomenis(){
			
			if ( $_POST ) {
			
				$this -> ar_atsiusti_nauji_atsakymai = true;
			}
		}
	
		public function arAtsiustiAtsakymai() {
		
			return $this -> ar_atsiusti_nauji_atsakymai;
		}
		
		public function issaugokAtsakymuDuomenis() {
		
			$this -> apklausos_irasas -> issaugotiDuomenuBazeje();
		}
		
		public function gautiDuomenis() {
		
			$this -> apklausos_sarasas -> gautiSarasaIsDuomenuBazes();
		}
		
		public function parodykAtsakymus() {

			foreach ( $this -> apklausos_sarasas -> sarasas as $svecio_irasas ) {
			
				include 'apklausos_sarasas.html.php';
			
			}
		}
	}