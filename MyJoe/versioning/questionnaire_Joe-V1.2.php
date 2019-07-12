<div class="d-block displayNone">
	<form class="bg-gradient-warning rounded" action="traitement2.php" method="POST">
		<!-- QUESTION 1 -->
		<div class="question form-group pt-4" id="q1">
			<h1>Pourquoi souhaitez-vous devenir un Joe?</h1>
			<div class="custom-control custom-radio">
				<input type="radio" id="q1_rep1" class="custom-control-input" name="q1" value="q1_rep1">
				<label for="q1_rep1" class="custom-control-label">Je souhaite avoir un complément de revenus</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="q1_rep2" class="custom-control-input" name="q1" value="q1_rep2">
				<label for="q1_rep2" class="custom-control-label">Je souhaite que ce soit mon revenu principal</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="q1_rep3" class="custom-control-input" name="q1" value="q1_rep3">
				<label for="q1_rep3" class="custom-control-label">Je suis curieux car j'adore l'art de la vente</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="q1_rep4"  class="custom-control-input" name="q1" value="q1_rep4">
				<label for="q1_rep4" class="custom-control-label">Je suis un concurrent et j'essaye d'avoir des informations</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" id="q1_rep5" class="custom-control-input" name="q1" value="q1_rep5">
				<label for="q1_rep5" class="custom-control-label">Autres</label>
				<input type="text" class="form-control displayNone" id="q1_rep5Text" name="q1_rep5Text">
			</div>
		</div>
		<!-- QUESTION 2 -->
		<div class="question form-group pt-4" id="q2">
			<h1>Avez-vous de l'expérience en tant que vendeur(se), commercial(e) ou hôte(sse)?<span>Plusieurs choix possibles</span></h1>
			<div class="custom-control custom-checkbox">
				<input type="checkbox"  class="custom-control-input qProfil" id="q2_rep1" name="q2[]" value="Vendeur(se)">
				<label for="q2_rep1" class="custom-control-label">Vendeur(se)</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input qProfil" id="q2_rep2" name="q2[]" value="Commercial(e)">
				<label for="q2_rep2" class="custom-control-label">Commercial(e)</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" id="q2_rep3" name="q2[]"value="hôte(sse)">
				<label for="q2_rep3" class="custom-control-label">hôte(sse)</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input qProfil" id="q2_rep4" name="q2[]" value="Non"> 
				<label for="q2_rep4" class="custom-control-label">Non</label>
			</div>
		</div>

		<!--VENDEUR--repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat" class="displayNone">
			<div class="question form-group pt-4" id="q3">
				<h1> Où avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)</span>?</h1>
				<input type="text" id="q3Text" name="q3Text" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)?</span></h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1" name="q3_1" value="q3_1_rep1">
					<label for="q3_1_rep1" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2" name="q3_1" value="q3_1_rep2">
					<label for="q3_1_rep2" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3" name="q3_1" value="q3_1_rep3">
					<label for="q3_1_rep3" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4" name="q3_1" value="q3_1_rep4">
					<label for="q3_1_rep4" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4Text" name="q3_1_rep4Text" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2">
				<h1>Travaillez-vous encore à <span class="vendeurTitre" id="q3_1textRepeat1_rep">...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat1" name="q3_2Repeat1" value="q3_2_rep1Repeat2">
					<label for="q3_2_rep1Repeat1" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat1" name="q3_2Repeat1" value="q3_2_rep2Repeat1">
					<label for="q3_2_rep2Repeat1" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat2" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--VENDEUR--ENDrepeat--------------------------------------------------------------------->
		<!--VENDEUR--2repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat2Input" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat2">
				<h1> Où avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)</span>?</h1>
				<input type="text" id="q3TextRepeat2" name="q3TextRepeat2" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat2">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)?</span></h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat2" name="q3_1Repeat2" value="q3_1_rep1Repeat2">
					<label for="q3_1_rep1Repeat2" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat2" name="q3_1Repeat2" value="q3_1_rep2Repeat2">
					<label for="q3_1_rep2Repeat2" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat2" name="q3_1Repeat2" value="q3_1_rep3Repeat2">
					<label for="q3_1_rep3Repeat2" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat2" name="q3_1Repeat2" value="q3_1_rep4Repeat2">
					<label for="q3_1_rep4Repeat2" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat2" name="q3_1_rep4TextRepeat2" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat2">
				<h1>Travaillez-vous encore à <span class="vendeurTitre" id="q3_1textRepeat2_rep">...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat2" name="q3_2Repeat2" value="q3_2_rep1Repeat2">
					<label for="q3_2_rep1Repeat2" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat2" name="q3_2Repeat2" value="q3_2_rep2Repeat2">
					<label for="q3_2_rep2Repeat2" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat3" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--VENDEUR--2ENDrepeat--------------------------------------------------------------------->
		<!--VENDEUR--3repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat3Input" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat3">
				<h1> Où avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)</span>?</h1>
				<input type="text" id="q3TextRepeat3" name="q3TextRepeat3" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat3">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)?</span></h1>
				<div class="custom-control custom-radio">	
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat3" name="q3_1Repeat3" value="q3_1_rep1Repeat3">
					<label for="q3_1_rep1Repeat3" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat3" name="q3_1Repeat3" value="q3_1_rep2Repeat3">
					<label for="q3_1_rep2Repeat3" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat3" name="q3_1Repeat3" value="q3_1_rep3Repeat3">
					<label for="q3_1_rep3Repeat3" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat3" name="q3_1Repeat3" value="q3_1_rep4Repeat3">
					<label for="q3_1_rep4Repeat3" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat3" name="q3_1_rep4TextRepeat3" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat3">
				<h1>Travaillez-vous encore à <span class="vendeurTitre" id="q3_1textRepeat3_rep">...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat3" name="q3_2Repeat3" value="q3_2_rep1Repeat3">
					<label for="q3_2_rep1Repeat3" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat3" name="q3_2Repeat3" value="q3_2_rep2Repeat3">
					<label for="q3_2_rep2Repeat3" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat4" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--VENDEUR--3ENDrepeat--------------------------------------------------------------------->
		<!--VENDEUR--4repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat4Input_vendeur" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat4">
				<h1> Où avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)</span>?</h1>
				<input type="text" id="q3TextRepeat4" name="q3TextRepeat4" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat4">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="vendeurTitre">Vendeur(se)?</span></h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat3" name="q3_1Repeat3" value="q3_1_rep1Repeat3">
					<label for="q3_1_rep1Repeat3" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat3" name="q3_1Repeat3" value="q3_1_rep2Repeat3">
					<label for="q3_1_rep2Repeat3" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat3" name="q3_1Repeat3" value="q3_1_rep3Repeat3">
					<label for="q3_1_rep3Repeat3" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat3" name="q3_1Repeat3" value="q3_1_rep4Repeat3">
					<label for="q3_1_rep4Repeat3" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat3" name="q3_1_rep4TextRepeat3" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat4">
				<h1>Travaillez-vous encore à <span class="vendeurTitre" id="q3_1textRepeat4_rep">...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat3" name="q3_2Repeat3" value="q3_2_rep1Repeat3">
					<label for="q3_2_rep1Repeat3" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat3" name="q3_2Repeat3" value="q3_2_rep2Repeat3">
					<label for="q3_2_rep2Repeat3" class="custom-control-label">Non</label>
				</div>
			</div>
		</div>
		<!--VENDEUR--4ENDrepeat--------------------------------------------------------------------->
		<!--vendeur----------------------------------------------------------------------->
		<!--Commercial-------------------------------------------------------------------->
		<!--COMMERCIAL--1repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat1Input_commercial" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat1_commercial">
				<h1> Où avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)</span>?</h1>
				<input type="text" id="q3TextRepeat1_commercial" name="q3TextRepeat1_commercial" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat1_commercial">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)?</span></h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat1_commercial" name="q3_1Repeat1_commercial" value="q3_1_rep1Repeat1_commercial">
					<label for="q3_1_rep1Repeat1_commercial" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat1_commercial" name="q3_1Repeat1_commercial" value="q3_1_rep2Repeat1_commercial">
					<label for="q3_1_rep2Repeat1_commercial" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat1_commercial" name="q3_1Repeat1_commercial" value="q3_1_rep3Repeat1_commercial">
					<label for="q3_1_rep3Repeat1_commercial" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat1_commercial" name="q3_1Repeat1_commercial" value="q3_1_rep4Repeat1_commercial">
					<label for="q3_1_rep4Repeat1_commercial" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat1_commercial" name="q3_1_rep4TextRepeat1_commercial" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat1_commercial">
				<h1>Travaillez-vous encore à <span class="commercialTitre" id='q3Repeat1_comm_rep'>...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat1_commercial" name="q3_2Repeat1_commercial" value="q3_2_rep1Repeat1_commercial">
					<label for="q3_2_rep1Repeat1_commercial" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat1_commercial" name="q3_2Repeat1_commercial" value="q3_2_rep2Repeat1_commercial">
					<label for="q3_2_rep2Repeat1_commercial" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat1_commercial" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--COMMERCIAL--1ENDrepeat--------------------------------------------------------------------->
		<!--COMMERCIAL--2repeat------------------------------------------------------------------------>
		<!-- QUESTION 3 -->
		<div id="repeat2Input_commercial" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat2_commercial">
				<h1> Où avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)</span>?</h1>
				<input type="text" id="q3TextRepeat2_commercial" name="q3TextRepeat2_commercial" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat2_commercial">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)?</span></h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat2_commercial" name="q3_1Repeat2_commercial" value="q3_1_rep1Repeat2_commercial">
					<label for="q3_1_rep1Repeat2_commercial" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat2_commercial" name="q3_1Repeat2_commercial" value="q3_1_rep2Repeat2_commercial">
					<label for="q3_1_rep2Repeat2_commercial" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat2_commercial" name="q3_1Repeat2_commercial" value="q3_1_rep3Repeat2_commercial">
					<label for="q3_1_rep3Repeat2_commercial" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat2_commercial" name="q3_1Repeat2_commercial" value="q3_1_rep4Repeat2_commercial">
					<label for="q3_1_rep4Repeat2_commercial" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat2_commercial" name="q3_1_rep4TextRepeat2_commercial" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat2_commercial">
				<h1>Travaillez-vous encore à <span class="commercialTitre" id='q3Repeat2_comm_rep'>...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat2_commercial" name="q3_2Repeat2_commercial" value="q3_2_rep1Repeat2_commercial">
					<label for="q3_2_rep1Repeat2_commercial" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat2_commercial" name="q3_2Repeat2_commercial" value="q3_2_rep2Repeat2_commercial">
					<label for="q3_2_rep2Repeat2_commercial" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat2_commercial" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--COMMERCIAL--2ENDrepeat--------------------------------------------------------------------->
		<!--COMMERCIAL--3repeat------------------------------------------------------------------------>
		<!-- QUESTION 3 -->
		<div id="repeat3Input_commercial" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat3_commercial">
				<h1> Où avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)</span>?</h1>
				<input type="text" id="q3TextRepeat3_commercial" name="q3TextRepeat3_commercial" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat3_commercial">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)?</span></h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat3_commercial" name="q3_1Repeat3_commercial" value="q3_1_rep1Repeat3_commercial">
					<label for="q3_1_rep1Repeat3_commercial" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat3_commercial" name="q3_1Repeat3_commercial" value="q3_1_rep2Repeat3_commercial">
					<label for="q3_1_rep2Repeat3_commercial" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat3_commercial" name="q3_1Repeat3_commercial" value="q3_1_rep3Repeat3_commercial">
					<label for="q3_1_rep3Repeat3_commercial" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat3_commercial" name="q3_1Repeat3_commercial" value="q3_1_rep4Repeat3_commercial">
					<label for="q3_1_rep4Repeat3_commercial" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat3_commercial" name="q3_1_rep4TextRepeat3_commercial" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat3_commercial">
				<h1>Travaillez-vous encore à <span class="commercialTitre" id='q3Repeat3_comm_rep'>...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat3_commercial" name="q3_2Repeat3_commercial" value="q3_2_rep1Repeat3_commercial">
					<label for="q3_2_rep1Repeat3_commercial" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat3_commercial" name="q3_2Repeat3_commercial" value="q3_2_rep2Repeat3_commercial">
					<label for="q3_2_rep2Repeat3_commercial" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat3_commercial" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--COMMERCIAL--3ENDrepeat--------------------------------------------------------------------->
		<!--COMMERCIAL--4repeat------------------------------------------------------------------------>
		<!-- QUESTION 3 -->
		<div id="repeat4Input_commercial" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat4_commercial">
				<h1> Où avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)</span>?</h1>
				<input type="text" id="q3TextRepeat4_commercial" name="q3TextRepeat4_commercial" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat4_commercial">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="commercialTitre">Commercial(e)?</span></h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat4_commercial" name="q3_1Repeat4_commercial" value="q3_1_rep1Repeat4_commercial">
					<label for="q3_1_rep1Repeat4_commercial" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat4_commercial" name="q3_1Repeat4_commercial" value="q3_1_rep2Repeat4_commercial">
					<label for="q3_1_rep2Repeat4_commercial" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat4_commercial" name="q3_1Repeat4_commercial" value="q3_1_rep3Repeat4_commercial">
					<label for="q3_1_rep3Repeat4_commercial" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat4_commercial" name="q3_1Repeat4_commercial" value="q3_1_rep4Repeat4_commercial">
					<label for="q3_1_rep4Repeat4_commercial" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat4_commercial" name="q3_1_rep4TextRepeat4_commercial" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat4_commercial">
				<h1>Travaillez-vous encore à <span class="commercialTitre" id='q3Repeat4_comm_rep'>...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat4_commercial" name="q3_2Repeat4_commercial" value="q3_2_rep1Repeat4_commercial">
					<label for="q3_2_rep1Repeat4_commercial" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat4_commercial" name="q3_2Repeat4_commercial" value="q3_2_rep2Repeat4_commercial">
					<label for="q3_2_rep2Repeat4_commercial" class="custom-control-label">Non</label>
				</div>
			</div>
		</div>
		<!--COMMERCIAL--4ENDrepeat--------------------------------------------------------------------->
		<!--Commercial-------------------------------------------------------------------->
		<!-- QUESTION 4_vendeur/comm/non -->
		<div id="q_vendeurCommNon" class="displayNone">
			<div class="question form-group pt-4" id="q4_vendeur">
				<h1>Pourquoi voulez-vous faire de la vente?</h1>
				<textarea class="form-control" aria-label="With textarea" id="q4_vendeur_rep" name="q4_vendeur_rep"></textarea>
			</div>
			<!-- QUESTION 5_vendeur/comm/non -->
			<div class="question form-group pt-4" id="q5_vendeur">
				<h1>Qu'est-ce que vous aimez dans la vente?</h1>
				<textarea class="form-control" aria-label="With textarea" id="q5_vendeur_rep" name="q5_vendeur_rep"></textarea>
			</div>
			<!-- QUESTION 6_vendeur/comm/non -->
			<div class="question form-group pt-4" id="q6_vendeur">
				<h1>Qu'est-ce que vous aimez vendre?</h1>
				<div class="question custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q6_vendeur_rep1" name="q6_vendeur" value="q6_vendeur_rep1">
					<label for="q6_vendeur_rep1" class="custom-control-label">Petits produits</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q6_vendeur_rep2" name="q6_vendeur" value="q6_rep2">
					<label for="q6_vendeur_rep2" class="custom-control-label">Grands produits</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q6_vendeur_rep3" name="q6_vendeur" value="q6_vendeur_rep3">
					<label for="q6_vendeur_rep3" class="custom-control-label">Produits de service</label>
				</div>
			</div>
			<!-- QUESTION 7_vendeur/comm/non -->
						<div class="question form-group pt-4" id="q7_vendeur">
			<h1>Dans quel secteur êtes-vous spécialisé?<span>plusieurs choix possibles</span></h1>
			<div class="container">
				<div class="row">
					<div class="col sm-6">
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep1_vendeur" name="q7_vendeur[]" value="Automobile">
							<label for="q7_rep1_vendeur" class="custom-control-label">Automobile</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep2_vendeur" name="q7_vendeur[]" value="Aeronotique">
							<label for="q7_rep2_vendeur" class="custom-control-label">Aéronautique</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep3_vendeur" name="q7_vendeur[]" value="Astronautique">
							<label for="q7_rep3_vendeur" class="custom-control-label">Astronautique</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep4_vendeur" name="q7_vendeur[]r" value="ArmeeSecurite">
							<label for="q7_rep4_vendeur" class="custom-control-label">Armée - sécurité</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep5_vendeur" name="q7_vendeur[]" value="ArtArtisanat">
							<label for="q7_rep5_vendeur" class="custom-control-label">Art - artisanat</label>
						 </div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep6_hote" name="q7_vendeur[]" value="EnergieEnvironnement">
							<label for="q7_rep6_hote" class="custom-control-label">Energie - environnement</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep7_vendeur" name="q7_vendeur[]" value="BanqueAssurance">
							<label for="q7_rep7_vendeur" class="custom-control-label">Banque - assurance</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep8_vendeur" name="q7_vendeur[]" value="LogistiqueTransport">
							<label for="q7_rep8_vendeur" class="custom-control-label">Logistique - transport</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep9_hote" name="q7_vendeur[]" value="HotellerieRestaurationTourisme">
							<label for="q7_rep9_hote" class="custom-control-label">Hôtellerie - restauration - tourisme</option></label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep10_vendeur" name="q7_vendeur[]" value="ItTelecom">
							<label for="q7_rep10_vendeur" class="custom-control-label">It - telecom</option></label>
						 </div>
					</div>
					<div class="col sm-6">
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep11_vendeur" name="q7_vendeur[]" value="EnseignementEducation">
							<label for="q7_rep11_vendeur" class="custom-control-label">Enseignement - éducation</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep12_vendeur" name="q7_vendeur[]" value="BienEtreSante">
							<label for="q7_rep12_vendeur" class="custom-control-label">Bien être - santé</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep13_vendeur" name="q7_vendeur[]" value="BeauteCosmetiqueFragrance">
							<label for="q7_rep13_vendeur" class="custom-control-label">Beauté - cosmétique - fragrance</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep14_vendeur" name="q7_vendeur[]" value="CultureLoisirSport">
							<label for="q7_rep14_vendeur" class="custom-control-label">Culture - loisir - sport</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep15_vendeur" name="q7_vendeur[]" value="ModeAccessoire">
							<label for="q7_rep15_vendeur" class="custom-control-label">Mode - accessoire</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep16_hote" name="q7_vendeur[]" value="MaisonHabitat">
							<label for="q7_rep16_hote" class="custom-control-label">Maison - habitat</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep17_vendeur" name="q7_vendeur[]" value="Immobilier">
							<label for="q7_rep17_vendeur" class="custom-control-label">Immobilier</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep18_vendeur" name="q7_vendeur[]" value="CommerceDetailGrandeDistribution">
							<label for="q7_rep18_vendeur" class="custom-control-label">Commerce de détail - grande distribution</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep19_vendeur" name="q7_vendeur[]" value="MultimediaMobilite">
							<label for="q7_rep19_vendeur" class="custom-control-label">Multimédia - mobilité</option></label>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- QUESTION 8_vendeur/comm/non -->
			<h1  id="selonvous">Selon vous:</h1>
			<div class="question form-group pt-4" id="q8_vendeur">
				<h1>&Ecirc;tre vendeur c'est être:</h1>
				<div class="question custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_vendeur_rep1" name="q8_vendeur" value="q8_vendeur_rep1">
					<label for="q8_vendeur_rep1" class="custom-control-label">Agressif</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_vendeur_rep2" name="q8_vendeur" value="q8_vendeur_rep2">
					<label for="q8_vendeur_rep2" class="custom-control-label">&Agrave; l'écoute des besoins du client</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_vendeur_rep3" name="q8_vendeur" value="q8_vendeur_rep3">
					<label for="q8_vendeur_rep3" class="custom-control-label">Sûr de soi et être sûr de la qualité du produit que l'on vous propose</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_vendeur_rep4" name="q8_vendeur" value="q8_vendeur_rep4">
					<label for="q8_vendeur_rep4" class="custom-control-label">Argumenter le plus possible</label>
				</div>
			</div>
			<!-- QUESTION 9_vendeur/comm/non -->
			<div class="question form-group pt-4" id="q9_vendeur">
				<h1>Le but principal d'un vendeur est de:</h1>
				<div class="question custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q9_vendeur_rep1" name="q9_vendeur" value="q9_vendeur_rep1">
					<label for="q9_vendeur_rep1" class="custom-control-label">Faire sa vente</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q9_vendeur_rep2" name="q9_vendeur" value="q9_vendeur_rep2">
					<label for="q9_vendeur_rep2" class="custom-control-label">Avoir ou garder une relation durable avec son potentiel acheteur</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q9_vendeur_rep3" name="q9_vendeur" value="q9_vendeur_rep3">
					<label for="q9_vendeur_rep3" class="custom-control-label">Montrer à l'acheteur que c'est lui qui sait tout</label>
				</div>	
			</div>
		</div>
		<!--Hôte(sse)-------------------------------------------------------------------------->
		<!--Hôte(sse)--1repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat1Input_hote" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat1_hote">
				<h1> Où avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<input type="text" id="q3TextRepeat1_hote" name="q3TextRepeat1_hote" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat1_hote">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat1_hote" name="q3_1Repeat1_hote" value="q3_1_rep1Repeat1_commercial">
					<label for="q3_1_rep1Repeat1_hote" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat1_hote" name="q3_1Repeat1_hote" value="q3_1_rep2Repeat1_hote">
					<label for="q3_1_rep2Repeat1_hote" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat1_hote" name="q3_1Repeat1_hote" value="q3_1_rep3Repeat1_hote">
					<label for="q3_1_rep3Repeat1_hote" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat1_hote" name="q3_1Repeat1_hote" value="q3_1_rep4Repeat1_hote">
					<label for="q3_1_rep4Repeat1_hote" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat1_hote" name="q3_1_rep4TextRepeat1_hote" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat1_hote">
				<h1>Travaillez-vous encore à <span class="hoteTitre">...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat1_hote" name="q3_2Repeat1_hote" value="q3_2_rep1Repeat1_hote">
					<label for="q3_2_rep1Repeat1_hote" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat1_hote" name="q3_2Repeat1_hote" value="q3_2_rep2Repeat1_hote">
					<label for="q3_2_rep2Repeat1_hote" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat1_hote" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--Hôte(sse)--1ENDrepeat--------------------------------------------------------------------->
		<!--Hôte(sse)--2repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat2Input_hote" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat2_hote">
				<h1> Où avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<input type="text" id="q3TextRepeat2_hote" name="q3TextRepeat2_hote" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat2_hote">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat2_hote" name="q3_1Repeat2_hote" value="q3_1_rep1Repeat2_commercial">
					<label for="q3_1_rep1Repeat2_hote" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat2_hote" name="q3_1Repeat2_hote" value="q3_1_rep2Repeat2_hote">
					<label for="q3_1_rep2Repeat2_hote" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat2_hote" name="q3_1Repeat2_hote" value="q3_1_rep3Repeat2_hote">
					<label for="q3_1_rep3Repeat2_hote" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat2_hote" name="q3_1Repeat2_hote" value="q3_1_rep4Repeat2_hote">
					<label for="q3_1_rep4Repeat2_hote" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat2_hote" name="q3_1_rep4TextRepeat2_hote" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat2_hote">
				<h1>Travaillez-vous encore à <span class="hoteTitre">...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat2_hote" name="q3_2Repeat2_hote" value="q3_2_rep1Repeat2_hote">
					<label for="q3_2_rep1Repeat2_hote" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat2_hote" name="q3_2Repeat2_hote" value="q3_2_rep2Repeat2_hote">
					<label for="q3_2_rep2Repeat2_hote" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat2_hote" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--Hôte(sse)--2ENDrepeat--------------------------------------------------------------------->
		<!--Hôte(sse)--3repeat--------------------------------------------------------------------->
		<!-- QUESTION 3 -->
		<div id="repeat3Input_hote" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat3_hote">
				<h1> Où avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<input type="text" id="q3TextRepeat3_hote" name="q3TextRepeat3_hote" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat3_hote">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat3_hote" name="q3_1Repeat3_hote" value="q3_1_rep1Repeat3_commercial">
					<label for="q3_1_rep1Repeat3_hote" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat3_hote" name="q3_1Repeat3_hote" value="q3_1_rep2Repeat3_hote">
					<label for="q3_1_rep2Repeat3_hote" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat3_hote" name="q3_1Repeat3_hote" value="q3_1_rep3Repeat3_hote">
					<label for="q3_1_rep3Repeat3_hote" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat3_hote" name="q3_1Repeat3_hote" value="q3_1_rep4Repeat3_hote">
					<label for="q3_1_rep4Repeat3_hote" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat3_hote" name="q3_1_rep4TextRepeat3_hote" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat3_hote">
				<h1>Travaillez-vous encore à <span class="hoteTitre">...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat3_hote" name="q3_2Repeat3_hote" value="q3_2_rep1Repeat3_hote">
					<label for="q3_2_rep1Repeat3_hote" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat3_hote" name="q3_2Repeat3_hote" value="q3_2_rep2Repeat3_hote">
					<label for="q3_2_rep2Repeat3_hote" class="custom-control-label">Non</label>
				</div>
			</div>
			<div id="repeat3_hote" class=" d-flex text-center moreExperience">
				<i class="fas fa-plus"></i>
				<h3 class="text-justify">Ajouter une expérience</h3>
			</div>
		</div>
		<!--Hôte(sse)--3ENDrepeat--------------------------------------------------------------------->
		<!--Hôte(sse)--4repeat------------------------------------------------------------------------>
		<!-- QUESTION 3 -->
		<div id="repeat4Input_hote" class="displayNone">
			<div class="question form-group pt-4" id="q3Repeat4_hote">
				<h1> Où avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<input type="text" id="q3TextRepeat4_hote" name="q3TextRepeat4_hote" class="form-control">
			</div>
			<!-- QUESTION 3_1 -->
			<div class="question form-group pt-4" id="q3_1Repeat4_hote">
				<h1>Combien de temps y avez-vous travaillé en tant que <span class="hoteTitre">Hôte(sse)</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep1Repeat4_hote" name="q3_1Repeat4_hote" value="q3_1_rep1Repeat4_commercial">
					<label for="q3_1_rep1Repeat4_hote" class="custom-control-label">Moins de 3 mois</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio"  class="custom-control-input" id="q3_1_rep2Repeat4_hote" name="q3_1Repeat4_hote" value="q3_1_rep2Repeat4_hote">
					<label for="q3_1_rep2Repeat4_hote" class="custom-control-label">De 3 mois à 1 an</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep3Repeat4_hote" name="q3_1Repeat4_hote" value="q3_1_rep3Repeat4_hote">
					<label for="q3_1_rep3Repeat4_hote" class="custom-control-label">De 1 an à 3 ans</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_1_rep4Repeat4_hote" name="q3_1Repeat4_hote" value="q3_1_rep4Repeat4_hote">
					<label for="q3_1_rep4Repeat4_hote" class="custom-control-label ">Plus de 3 ans</label>
				</div>
				<div>
					<input type="text" id="q3_1_rep4TextRepeat4_hote" name="q3_1_rep4TextRepeat4_hote" class="form-control  displayNone">
				</div>
			</div>
			<!-- QUESTION 3_2 -->
			<div class="question form-group pt-4" id="q3_2Repeat4_hote">
				<h1>Travaillez-vous encore à <span class="hoteTitre" id='q3Repeat4_hote_rep'>...</span>?</h1>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep1Repeat4_hote" name="q3_2Repeat4_hote" value="q3_2_rep1Repeat4_hote">
					<label for="q3_2_rep1Repeat4_hote" class="custom-control-label">Oui</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q3_2_rep2Repeat4_hote" name="q3_2Repeat4_hote" value="q3_2_rep2Repeat4_hote">
					<label for="q3_2_rep2Repeat4_hote" class="custom-control-label">Non</label>
				</div>
			</div>
		</div>
		<!--Hôte(sse)--4ENDrepeat--------------------------------------------------------------------->
		<div id='q4_hote' class="displayNone">
			<!-- QUESTION 4_hôte(sse) -->
			<div class="question form-group pt-4" id="q4_hote">
				<h1>Pourquoi voulez-vous être <span class="hoteTitre">hôte(sse)</span>?</h1>
				<textarea class="form-control" aria-label="With textarea" id="q4_hote_rep" name="q4_hote_rep"></textarea>
			</div>
			<!-- QUESTION 5_hôte(sse) -->
			<div class="question form-group pt-4" id="q5_hote">
				<h1>Qu'est-ce que vous aimez dans ce travail?</h1>
				<textarea class="form-control" aria-label="With textarea" id="q5_hote_rep" name="q5_hote_rep"></textarea>
			</div>
			<!-- QUESTION 6_hôte(sse) -->
			<div class="question form-group pt-4" id="q6_hote">
				<h1>Qu'est-ce que vous aimez présenter?</h1>
				<div class="question custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q6_hote_rep1" name="q6_hote" value="q6_hote_rep1">
					<label for="q6_hote_rep1" class="custom-control-label">Petits produits</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q6_hote_rep2" name="q6_hote" value="q6_hote_rep2">
					<label for="q6_hote_rep2" class="custom-control-label">Grands produits</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q6_hote_rep3" name="q6_hote" value="q6_hote_rep3">
					<label for="q6_hote_rep3" class="custom-control-label">Produits de service</label>
				</div>
			</div>
			<!-- QUESTION 7_hôte(sse) -->
			<div class="question form-group pt-4" id="q7_hote">
			<h1>Dans quel secteur êtes-vous spécialisé?<span>plusieurs choix possibles</span></h1>
			<div class="container">
				<div class="row">
					<div class="col sm-6">
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep1_hote" name="q7_hote[]" value="Automobile">
							<label for="q7_rep1_hote" class="custom-control-label">Automobile</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep2_hote" name="q7_hote[]" value="Aeronotique">
							<label for="q7_rep2_hote" class="custom-control-label">Aéronautique</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep3_hote" name="q7_hote[]" value="Astronautique">
							<label for="q7_rep3_hote" class="custom-control-label">Astronautique</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep4_hote" name="q7_hote[]" value="ArmeeSecurite">
							<label for="q7_rep3_hote" class="custom-control-label">Armée - sécurité</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep5_hote" name="q7_hote[]" value="ArtArtisanat">
							<label for="q7_rep5_hote" class="custom-control-label">Art - artisanat</label>
						 </div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep6_hote" name="q7_hote[]" value="EnergieEnvironnement">
							<label for="q7_rep6_hote" class="custom-control-label">Energie - environnement</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep7_hote" name="q7_hote[]" value="BanqueAssurance">
							<label for="q7_rep7_hote" class="custom-control-label">Banque - assurance</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep8_hote" name="q7_hote[]" value="LogistiqueTransport">
							<label for="q7_rep8_hote" class="custom-control-label">Logistique - transport</label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep9_hote" name="q7_hote[]" value="HotellerieRestaurationTourisme">
							<label for="q7_rep9_hote" class="custom-control-label">Hôtellerie - restauration - tourisme</option></label>
						 </div>
						 <div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep10_hote" name="q7_hote[]" value="ItTelecom">
							<label for="q7_rep10_hote" class="custom-control-label">It - telecom</option></label>
						 </div>
					</div>
					<div class="col sm-6">
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep11_hote" name="q7_hote[]" value="EnseignementEducation">
							<label for="q7_rep11_hote" class="custom-control-label">Enseignement - éducation</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep12_hote" name="q7_hote[]" value="BienEtreSante">
							<label for="q7_rep12_hote" class="custom-control-label">Bien être - santé</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep13_hote" name="q7_hote[]" value="BeauteCosmetiqueFragrance">
							<label for="q7_rep13_hote" class="custom-control-label">Beauté - cosmétique - fragrance</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep14_hote" name="q7_hote[]" value="CultureLoisirSport">
							<label for="q7_rep14_hote" class="custom-control-label">Culture - loisir - sport</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep15_hote" name="q7_hote[]" value="ModeAccessoire">
							<label for="q7_rep15_hote" class="custom-control-label">Mode - accessoire</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep16_hote" name="q7_hote[]" value="MaisonHabitat">
							<label for="q7_rep16_hote" class="custom-control-label">Maison - habitat</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep17_hote" name="q7_hote[]" value="Immobilier">
							<label for="q7_rep17_hote" class="custom-control-label">Immobilier</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep18_hote" name="q7_hote[]" value="CommerceDetailGrandeDistribution">
							<label for="q7_rep18_hote" class="custom-control-label">Commerce de détail - grande distribution</option></label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox"  class="custom-control-input" id="q7_rep19_hote" name="q7_hote[]" value="MultimediaMobilite">
							<label for="q7_rep19_hote" class="custom-control-label">Multimédia - mobilité</option></label>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!--QUESTION 8_hôte(sse) -->
			<h1>Quel est votre réaction dans cette situation?</h1>
			<div class="question form-group pt-4" id="q8_hote">
				<h1>Après votre présentation, un client potentiel vous contredit et dévalorise l'entreprise pour laquelle vous travaillez:</h1>
				<div class="question custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_hote_rep1" name="q8_hote" value="q8_hote_rep1">
					<label for="q8_hote_rep1" class="custom-control-label">Vous souriez et ne répondez pas</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_hote_rep2" name="q8_hote" value="q8_hote_rep2">
					<label for="q8_hote_rep2" class="custom-control-label">Vous tentez d'argumenter pour lui montrer qu'il se trompe</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_hote_rep3" name="q8_hote" value="q8_hote_rep3">
					<label for="q8_hote_rep3" class="custom-control-label">Vous appelez un membre de l'entreprise pour avoir un soutien</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" id="q8_hote_rep4" name="q8_hote" value="q8_hote_rep4">
					<label for="q8_hote_rep4" class="custom-control-label">Vous vous énervez contre lui</label>
				</div>
			</div>
		</div>
		<!--Hôte(sse)--END------------------------------------------------------------------------->

		<!--QUESTION 10-->
		<div class="question form-group pt-4" id="q10">
			<h1>Comment as-tu découvert notre service?</h1>
			<select class="form-control custom-select custom-select-sm" name="q10">
				<option value="null">Sélectionner une réponse</option>
				<option value="Facebook">Facebook</option>
				<option value="Instagram">Instagram</option>
				<option value="Presse">Presse</option>
				<option value="Recherche google">Recherche google</option>
				<option value="Salon, évenement">Salon, évenement</option>
				<option value="Sites">Sites généralistes d'annonces(Indeed, leboncoin, Monster,...)</option>
				<option value="Contact">Bouche à oreille</option>
				<option value="Autre">Autre</option>
			</select>
		</div>
		<!--QUESTION 11-->
		<div class="question form-group pt-4" id="q11">
			<h1>&Agrave; quelle fréquence souhaites-tu travailler avec JOE?</h1>
			<div class="question custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="q11_rep1" name="q11" value="q11_rep1">
				<label for="q11_rep1" class="custom-control-label">3 à 5 jours par mois</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="q11_rep2" name="q11" value="q11_rep2">
				<label for="q11_rep2" class="custom-control-label">2 à 3 jours par semaine</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="q11_rep3" name="q11" value="q11_rep3">
				<label for="q11_rep3" class="custom-control-label">3 à 5 jours par semaine</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="q11_rep4" name="q11" value="q11_rep4">
				<label for="q11_rep4" class="custom-control-label">&Agrave; temps plein</label>
			</div>
		</div>
		<!--QUESTION 12-->
		<div class="question form-group pt-4" id="q12">
			<h1>Merci pour toutes ces informations, voici la dernière question avant de prendre rendez-vous et se rencontrer, connaissez-vous quelqu'un autour de vous qui serez intéressé à travailler avec JOE?</h1>
			<div class="question custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="q12_rep1" name="q12" value="q12_rep1">
				<label for="q12_rep1" class="custom-control-label">Oui</label>
				<!--Joe's FRIENDS-->
				<div id="joeFriends" class="displayNone">
					<div class="form-group">
						<label for="q12_nom">Nom</label>
						<input type="text" id="q12_nom" class="form-control" name="q12_nom" value="">
					</div>
					<div class="form-group">
						<label for="q12_prenom">Prénom</label>
						<input type="text" id="q12_prenom" class="form-control" name="q12_prenom" value="">
					</div>
					<div class="form-group">
						<label for="q12_telephone">Téléphone</label>
						<input type="text" id="q12_telephone" class="form-control" name="q12_telephone" value="">
					</div>
					<div class="form-group">
						<label for="q12_email">Email</label>
						<input type="text" id="q12_email" class="form-control" name="q12_email" value="">
					</div>
				</div>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" class="custom-control-input" id="q12_rep2" name="q12" value="q12_rep2">
				<label for="q12_rep2" class="custom-control-label">Non</label>
			</div>
		</div>	
		<input type="submit" name="questionnaire">				
	</form>
	<div class="m-2" id="btnAffiche">
		<h2 class="continuer text-center">Continuer</h2>
		<i class="fas fa-angle-double-down d-flex justify-content-center"></i>
	</div>
</div>