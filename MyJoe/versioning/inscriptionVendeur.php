<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style_inscription.css">
</head>
<body>
	<header>
		<img class="img-fluid" src="img/image_header_quizz_entreprise-v1.1.jpg" alt="image header Joe sur ordinateur">
	</header>
	<div class="container">
		<div class="justify-content-ms-center">
			<h2 class="text-center m-5">Nous souhaitons mieux te connaître pour pouvoir t'envoyer les bonnes missions!<br><span>5 min chrono pas plus</span></h2>
		</div>
		<div class="border">
			<div class="form-group justify-content-sm-center m-5" id="q1_Inscription">
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
		<div class="form-group m-5" id="q2_Inscription">
			<h3>Je suis: </h3>
			<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q2_Inscription_rep1" name="q2_Inscription" value="femme">
					<label for="q2_Inscription_rep1" class="custom-control-label">Une femme</label>
			</div>
			<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q2_Inscription_rep2" name="q2_Inscription" value="homme">
					<label for="q2_Inscription_rep2" class="custom-control-label">Un homme</label>
			</div>
		</div>
	</div>
<!--A AJOUTER AU HTML-------------------------------------------------------------------------------->	
	<div class="m-2 displayNone" id="btnAfficheQuestionnaire">
			<h2 class="continuer text-center">Continuer</h2>
			<i class="fas fa-angle-double-down d-flex justify-content-center"></i>
	</div>


	<div class="justify-content-sm-center m-5 displayNone" id="preQ"> <!--Ajout de la classe displayNone-->
<!--FIN-A AJOUTER AU HTML--------------------------------------------------------------------------------->	
		<h2 class="text-center mt-5 mb-5">Parlons maintenant plus de toi en tant que vendeur(se),et/ou commercial(e) et/ou hôte(sse)...</h2>
		<div class="d-flex justify-content-center m-3">
			<button class="btn btnQuestionnaire rounded" type="submit" href="">C'est parti!</button>
		</div>
		<!--Affiche questionnaire------------------------------------------------------>
		<!--A AJOUTER AU HTML-------------------------------------------------------------------------------->	
		<div class="m-2" id="btnAfficheCV">
			<h2 class="continuer text-center">Continuer</h2>
			<i class="fas fa-angle-double-down d-flex justify-content-center"></i>
		</div>
<!--FIN---A AJOUTER AU HTML-------------------------------------------------------------------------------->
	</div>

	<div class="justify-content-sm-center m-5 p-3 rounded border displayNone" id="CV"><!--Ajout de la classe displayNone-->
		<h2 class="m-3 text-center">Envoie nous ton cv ou ton lien linkedIn!<br><span>Facultatif</span></h2>
			
			<div class="custom-file m-1">
  				<input type="file" class="custom-file-input" lang="fr"id="customFileLang" name="CV"  accept=".pdf,.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
  				<label class="custom-file-label" for="customFileLang">Ton CV ici</label>
			</div>
			<div class="input-group m-1">
  				<input type="text" class="form-control" placeholder="www.linkedin.com/in/xxx" aria-label="LinkedIn" aria-describedby="basic-addon1">
			</div>

	</div>
		<!-- <div class="d-flex justify-content-center ">
			<button class="btn m-5 btnQuestionnaire rounded" type="submit" href="">Valider</button>
		</div> -->
	<div class="border">
		<h2 class="text-center">Dernière étape!</h2><br>
		<p class="text-center"> Ici mettre API CALENDAR <br> loremLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="inscriptionVendeur.js"></script>
</body>
</html>
