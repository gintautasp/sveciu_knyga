<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Apklausa</title>
	<style>
		h2 {
			text-align: center;
		}
		#ivedimo_forma, #rezultatas, .centre, #pranesimai {
			width: 60%;
			margin: 12px auto 12px auto;
			border: 1px solid grey;
			padding: 12px;
			overflow: auto;
			border-radius: 12px;
			box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
			background-color: BlanchedAlmond;
		}
		.centre {
			border: 0;
		}
		label {
			display: block;
		}
		input[type=text] , textarea, select{
			width: calc( 100% - 7px );
			padding: 4px 3px;
			margin-bottom: 12px;
		}
		input[type=submit] {
			width: 30%;
			float: right;
			padding: 4px 3px;
			margin: 12px;	
			border-radius: 12px;	
			box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);			
		}
		.svecio_irasas {
			padding: 12px 7px;		
		}
		.pasirase {
			font-weight: bold;
			margin-left: 12px;
		}
		.data_laikas {
			float: right;
			font-size: 75%;
			color: grey;
			margin-right: 12px;
		}
		.zinute {
			background-color: white;
			clear: right;
			margin-bottom: 25px;
			padding: 12px 7px;
			font-family: Courier New;
			font-size: 85%;			
		}
		.veikla {
			font-style: italic;
		}
	</style>
	<script>
		function validateForm() { 																// tikrintiPasirinkimus() {
		
			alert ( 'tikrinam pasirinkimus ..' );
		
			pasirinkta_teisingai = true;
			
			pasirinkta_priemone = document.getElementById ( 'priemone' ).value;
			
			if ( pasirinkta_priemone == 'kita' ) {
			
				kita_priemone = document.getElementById ( 'kita_priemone' ).value;
				
				if ( kita_priemone.length < 3 ) {
				
					alert ( 'Pasirinkote kitą priemonę, iš priemonių sąrašo,\n todėl parašykite kokią žemiau esančiame laukelyje' )
					pasirinkta_teisingai = false;
				}
			
			}
			
			pasirinkta_bent_viena_prekiu_rusis = false;
			
			for( i= 1; i<15; i++ ) {
			
				prekiu_rusis = document.gelementById ( 'prekes_' + i );
				
				if ( prekiu_rusis.checked ) {
				
					pasirinkta_bent_viena_prekiu_rusis = true;
				}
			}
			
			prekiaus_kita = document.getElementById( 'prekiaus_kita' );
				
			if ( prekiaus_kita.checked ) {
				
				kitos_prekes = document.getElementById ( 'kitos_prekes' ).value;

				if ( kita_prekes.length < 3 ) {
				
					alert ( 'Pasirinkote kitą prekes, iš prekių sąrašo,\n todėl parašykite kokiomis žemiau esančiame laukelyje' )
					pasirinkta_teisingai = false;
					
				} else {
				
					pasirinkta_bent_viena_prekiu_rusis = true;
				}
			}

			if ( ! pasirinkta_bent_viena_prekiu_rusis ) {
			
				alert ( 'Pasirinkite bent vieną prekių rūšį' );
				pasirinkta_teisingai = false;
			}
		
			return false;
		}
	</script>
</head>
<body>
	<h2>Apklausa</h2>
	<div id="pranesimai">	
	</div>
	<div id="ivedimo_forma">
		<form method="POST" action="" onsubmit="return validateForm()">
			<label>Jusu vardas, slapyvardis</label>
			<input type="text" name="vardas">
			<label>Žinutė</label>
			<textarea name="zinute"></textarea>
			<h3>Maloniai prašome Jūsų atsakyti į keletą klausimų</h3>
			<label>Jūsų lytis</label>
			<div class="centre">
				<input type="radio" name="lytis" value="vyr" selected> - vyr.<br>
				<input type="radio" name="lytis" value="mot"> - mot.<br>
			</div>
			<label>Jūsų būsima veikla</label>
			<select name="veikla">
				<option value="ieskos_darbo_ep">Ieškosiu darbo, el. prekyboje</option>
				<option value="ieskos_darbo">Ieškosiu bet kokio darbo</option>
				<option value="ieskos_darbo_ne_ep">Ieškosiu kitokio darbo, ne el. prekyboje</option>				
				<option value="uzsiimsiu_pats_ep">Užsiimsiu pats el. prekyba</option>
				<option value="uzsiimsiu_kitokiu_verslu_ne_ep">Užsiimsiu kitokiu verslu ne el. prekyba</option>
				<option value="emigruosiu_is_lt">Emigruosiu</option>				
				<option value="dar_nenusprende">Dar nenusprendžiau</option>					
			</select>
			<label>Jei teks kurti el. parduotuvę, mėginsiu, ją sukurti su:</label>			
			<select name="priemone" id="priemone">
				<option value="opencart">Opencart</option>
				<option value="prestashop">Opencart</option>				
				<option value="wordpress">Wordpress</option>
				<option value="eshoprent">Eshoprent</option>				
				<option value="hostinger">Hostinger</option>
				<option value="shopify">Shopify</option>				
				<option value="shopiteka">Shopiteka</option>
				<option value="shopiteka">Dar nenusprendžiau</option>				
				<option value="kita">Kita ..</option>				
			</select>	
			<label>Jei naudositės kita priemone, parašykite kokia</label>	
			<input type="text" name="kita_priemone" value="">
			<label>Jei prekiausiu tai ..</label>	
			<div class="centre">			
			<input type="checkbox" name="prekiaus[]" value="maisto" id="prekes_1"> - Maisto prekės<br>
			<input type="checkbox" name="prekiaus[]" value="apranga" id="prekes_2"> - Apranga<br>
			<input type="checkbox" name="prekiaus[]" value="avalyne" id="prekes_3"> - Avalynė<br>
			<input type="checkbox" name="prekiaus[]" value="sporto" id="prekes_4"> - Sporto prekės<br>
			<input type="checkbox" name="prekiaus[]" value="laisvalaikio" id="prekes_5"> - Laisvalaikio prekės<br>
			<input type="checkbox" name="prekiaus[]" value="gyvunu" id="prekes_6"> - Prekės gyvunams<br>
			<input type="checkbox" name="prekiaus[]" value="namu" id="prekes_7"> - Namu apyvokos prekės<br>
			<input type="checkbox" name="prekiaus[]" value="automobiliu" id="prekes_8"> - Prekės automobiliams<br>
			<input type="checkbox" name="prekiaus[]" value="baldai" id="prekes_9"> - Baldai<br>
			<input type="checkbox" name="prekiaus[]" value="biuro" id="prekes_10"> - Biuro prekės<br>
			<input type="checkbox" name="prekiaus[]" value="zaislai" id="prekes_11"> - Žaislai<br>
			<input type="checkbox" name="prekiaus[]" value="vaikams" id="prekes_12"> - Vaikams<br>
			<input type="checkbox" name="prekiaus[]" value="ivairios" id="prekes_13"> - Įvairios ir kitokios<br>	
			<input type="checkbox" name="prekiaus[]" value="neapsisprende" id="prekes_14"> - Neapsisprendžiau<br>
			<input type="checkbox" name="prekiaus[]" value="kita .." id="prekiaus_kita"> - Kita<br>
			<label>Jei prekiausit kitomis prekėmis, įrašykite kokiomis</label>	
			<input type="text" name="kitos_prekes" value="" id="kitos_prekes">			
			</div>			
			<input type="submit" value="siusti">
		</form>
	</div>
	<div id="rezultatas">
<?php
		$apklausa -> parodykAtsakymus();
?>
	</div>
</body>
</html>