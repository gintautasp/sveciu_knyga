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
</head>
<body>
	<h2>Apklausa</h2>
	<div id="pranesimai">	
	</div>
	<div id="ivedimo_forma">
		<form method="POST" action="">
			<label>Jusu vardas, slapyvardis</label>
			<input type="text" name="vardas">
			<label>Žinutė</label>
			<textarea name="zinute"></textarea>
			<h3>Maloniai prašome Jūsų atsakyti į keletą klausimų</h3>
			<label>Jūsų lytis</label>
			<div class="centre">
				<input type="radio" name="lytis" value="vyr"> - vyr.<br>
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
			<select name="priemone">
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
			<input type="checkbox" name="prekiaus[]" value="maisto"> - Maisto prekės<br>
			<input type="checkbox" name="prekiaus[]" value="apranga"> - Apranga<br>
			<input type="checkbox" name="prekiaus[]" value="avalyne"> - Avalynė<br>
			<input type="checkbox" name="prekiaus[]" value="sporto"> - Sporto prekės<br>
			<input type="checkbox" name="prekiaus[]" value="laisvalaikio"> - Laisvalaikio prekės<br>
			<input type="checkbox" name="prekiaus[]" value="gyvunu"> - Prekės gyvunams<br>
			<input type="checkbox" name="prekiaus[]" value="namu"> - Namu apyvokos prekės<br>
			<input type="checkbox" name="prekiaus[]" value="automobiliu"> - Prekės automobiliams<br>
			<input type="checkbox" name="prekiaus[]" value="baldai"> - Baldai<br>
			<input type="checkbox" name="prekiaus[]" value="biuro"> - Biuro prekės<br>
			<input type="checkbox" name="prekiaus[]" value="zaislai"> - Žaislai<br>
			<input type="checkbox" name="prekiaus[]" value="vaikams"> - Vaikams<br>
			<input type="checkbox" name="prekiaus[]" value="ivairios"> - Įvairios ir kitokios<br>	
			<input type="checkbox" name="prekiaus[]" value="neapsisprende"> - Neapsisprendžiau<br>
			<input type="checkbox" name="prekiaus[]" value="kita .."> - Kita<br>
			<label>Jei prekiausit kitomis prekėmis, įrašykite kokiomis</label>	
			<input type="text" name="kitos_prekes" value="">			
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