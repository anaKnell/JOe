<?php
$alertMessages = array();
$formDatas = array();
if (isset($_POST))
{
	if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['btn'] == "cestparti_vendeur")
	{
		if (!isset($_POST['q1_Inscription'])) 
		{
			$alertMessages['q1_Inscription'] = "Veuillez préciser si oui ou non vous pouvez travailler en France!<br>";
		}
		else
		{
			if ($_POST['q1_Inscription'] == "Oui")
			{
				$formDatas["q1_Inscription"] =  "Test ". $_POST['q1_Inscription'] . ", je peux travailler en France.<br>";
			}
			elseif ($_POST['q1_Inscription'] == "Non")
			{
				$formDatas["q1_Inscription"] =  "Test ". $_POST['q1_Inscription'] . ", je ne peux pas travailler en France.<br>"; 
			}
			else 
			{
				$alertMessages['q1_Inscription'] =  $_POST['q1_Inscription'] . ", n'est pas un choix valide!<br>";
			}
		}

		if (!isset($_POST['q2_Inscription'])) 
		{
			$alertMessages['q2_Inscription'] =  "Veuillez préciser si vous êtes une femme ou un homme!<br>";
		}
		else
		{
			if ($_POST['q2_Inscription'] == "femme")
			{
				$formDatas["q2_Inscription"] =  [
					"q2_Inscription" => "Je suis une " . $_POST['q2_Inscription'] . ".<br>" 
				];
			}
			elseif ($_POST['q2_Inscription'] == "homme") 
			{
				$formDatas["q2_Inscription"] = "Je suis un " . $_POST['q2_Inscription'] . ".<br>";			}
			else 
			{
				$alertMessages['q2_Inscription'] =  $_POST['q2_Inscription'] . ", n'est pas un choix valide!<br>";
			}
		}
	}
}