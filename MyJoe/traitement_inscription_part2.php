<?php

/////Regex////////////////////////////////////////////

$reg_alpha_3min = '/^(?:(?:^| )\S+ *){3,}$/'; //textAREA
$reg_phrase ='/^(?:(?:^| )\S+ *){1,}$/'; // input

////Variable POST/////////////////////////////////////
$qGenre = $_POST['qGenre'];
$q1_radio = $_POST['q1'];
$q2_checkbox  = $_POST['q2'];

//Profil vendeur
$q3_vendeur_text = $_POST['q3Text'];
$q3_1_vendeur_radio = $_POST['q3_1'];
$q3_2_vendeur_radio = $_POST['q3_2Repeat1'];

//Profil comm
$q3_comm_text = $_POST['q3TextRepeat1_commercial'];
$q3_1_comm_radio = $_POST['q3_1Repeat1_commercial'];
$q3_2_comm_radio = $_POST['q3_2Repeat1_commercial'];

//Profil vend/comm/non
$q4_vendeur_textArea = $_POST['q4_vendeur_rep'];
$q5_vendeur_textArea = $_POST['q5_vendeur_rep'];
$q6_vendeur_radio = $_POST['q6_vendeur'];
$q7_vendeur_checkbox = $_POST['q7_vendeur'];
$q8_vendeur_radio = $_POST['q8_vendeur'];
$q9_vendeur_radio = $_POST['q9_vendeur'];

//Profil hotesse
$q3_hote_text = $_POST['q3TextRepeat1_hote'];
$q3_1_hote_radio = $_POST['q3_1Repeat1_hote'];
$q3_2_hote_radio = $_POST['q3_2Repeat1_hote'];
$q4_hote_textArea = $_POST['q4_hote_rep'];

$q5_hote_textArea = $_POST['q5_hote_rep'];
$q6_hote_radio = $_POST['q6_hote'];
$q7_hote_checkbox = $_POST['q7_hote'];
$q8_hote_radio = $_POST['q8_hote'];

//tous les types de profils
$q10_select = $_POST['q10'];
$q11_select = $_POST['q11'];
$q12_select = $_POST['q12'];


///////Traitement//////////////////////////////////
if (isset($_POST)){
	$msgQuestionnaire =""; /*$msgQuestionnaire +="Vérifier que vous avez bien coché une réponse aux questions posées"
}*/
	$erreur=0;

//teste condition pour chaque question
	if(!preg_match($reg_alpha_3min,$q5vendeur_textarea) || empty($q5vendeur_textarea)){
		$erreur+=1;
	}
	if(!isset($qGenre)|| !isset($q1_radio) || !isset($q3_2Repeat1_radio)|| !isset($q3_1_radio)){
		$erreur+=1;
	}
	if(!isset($q2_checkbox)){
		$erreur +=1;
	}
	if(!isset($q10_select) || $q10_checkbox == "Sélectionner une réponse"){
		$erreur +=1;
	}
	if(!preg_match($reg_1mot,$q3_text)){
		$erreur +=1;
	}
	
}
	else{
	echo'no';
	}

//fonction msg validé ou rejeté formulaire
    function msgAffiche($erreur){
    	if($erreur == 0){
			echo $erreur.' '."Votre formulaire a été envoyé avec succès.";
    	}
    		else{
    			
    		echo $erreur.' '."Les champs, entourés en rouge, ne sont pas correctement saisis. Veuillez remplir et/ou sélectionner ces champs";
			
    		}
    }
    
msgAffiche($erreur);