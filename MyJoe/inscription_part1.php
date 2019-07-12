<?php
session_start(); 
require_once('traitement_inscription_part1.php');
/*require_once('traitement_inscription_part2.php');*/
// foreach ($formDatas as $key => $value) {
// 	print_r($key . $value);
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style_inscription.css">
	<link rel="stylesheet" href="style/style_questionnaire.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
</head>
<body>
	<header>
		<!-- <img class="img-fluid" src="img/image_header_quizz_vendeur-v1.4.jpg" alt="image header Joe"> -->
	</header>
	<div class="container">
		<div class="justify-content-ms-center">
			<h2 class="text-center m-4">
				<?php
				if(isset($text)){
					echo $text;
				}
				?>				
				<br>
				<span>5 min chrono pas plus</span>
			</h2>
		</div>
		<div >
			<form action="" method="POST" id="form1_inscription_vendeur" >
				<?php
					if(isset($msg)){
						echo '<div class="alert alert-danger" role="alert">'.$msg.'</div>';
					}

					if (isset($success) && $success == "success") 
					{
						
						require_once("inscription_part2.php");
					}
					else 
					{ 
				?>
					<div class="form-group justify-content-sm-center m-5 p-5 border bg-light" id="q1_Inscription" >
						<h3>As-tu le droit de travailler en France?<span>(Pour travailler chez nous,tu as besoin d'un numéro de sécurité sociale français)</span></h3>
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="q1_Inscription_rep1" name="q1_Inscription" value="Oui">
							<label for="q1_Inscription_rep1" class="custom-control-label">Oui</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="q1_Inscription_rep2" name="q1_Inscription" value="Non">
							<label for="q1_Inscription_rep2" class="custom-control-label">Non</label>
						</div>
					</div>
					<div class="d-flex justify-content-center">
						<input type="submit" value="Continuer" name="inscription_part1" class="moreExperience ">
					</div>
					<?php
						}
					?>
				</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="JS/inscriptionVendeur.js"></script>
	<script src="JS/questionnaire_Joe.js"></script>
</body>
<footer>
	
</footer>
</html>	