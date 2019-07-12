<?php
$text = "Nous souhaitons mieux te connaître pour pouvoir t'envoyer les bonnes missions!";
/*$_SERVER["REQUEST_METHOD"] == "POST"*/
if (isset($_POST['inscription_part1'])){

	if(!isset($_POST['q1_Inscription'])){

		$msg="N'oubliez pas de cocher une des réponses!";

	}
	else{
		$travailFrance = $_POST['q1_Inscription'];
		/*var_dump($_POST);*/

		switch ($travailFrance) {
			case "Oui":
			$success = "success";
			$text ="Parlons maintenant plus de toi en tant que futur(e) Joe";
			break;

			case "Non":
			$msg = "Nous sommes désolés, mais nous cherchons des Joe pouvant travailler en France";	
			break;
			default:
			$msg = "N'oubliez pas de cocher une des réponses";
			break;
		}

	}
}

