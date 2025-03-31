<?php

		define ( 'DIR_MAIN', __DIR__ . '/' );
		define ( 'DIR_COMMON', realpath ( DIR_MAIN . '../bendram' ) . '/' );  

		include 'config.php';
		
		include DIR_COMMON . 'duomenu_baze.class.php';
		
		$db = new DuomenuBaze ( $conf [ 'db' ], $conf [ 'db_user' ], $conf [ 'db_password' ] );
		
		include DIR_COMMON . 'model_db.class.php';
		include DIR_COMMON . 'model_db_irasas.class.php';
		include DIR_COMMON . 'model_db_sarasas.class.php';	

		include 'apklausos_irasas.class.php';
		include 'apklausos_sarasas.class.php';
		
		include DIR_COMMON . 'controller.class.php';
		include 'apklausa.ctrl.php';		
		
		$apklausa = new ApklausaController();
		// 																																patikrink užklausą;
		$apklausa -> tikrintiUzklausuDuomenis();
		//																																jei atsiųsti atsakymai 
		//																																	tai išsaugok atsakymų duomenis
		if ( $apklausa -> arAtsiustiAtsakymai() ) {
		
			$apklausa -> issaugokAtsakymuDuomenis();
		}

		$apklausa -> gautiDuomenis();
		
		include 'apklausa.html.php';
		
