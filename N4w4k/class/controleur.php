

<?php 
include_once 'connexpdo.php';
	
	
	if(isset($_POST["nomUser"]) && isset($_POST["mdpUser1"]) && isset($_POST["mdpUser2"]) && isset($_POST["droitUser"]))
	{
		if($_POST["mdpUser1"] != $_POST["mdpUser2"])
		{ 
			echo "<script>alert(\"Erreur : Les deux mots de passe saisis ne sont pas identiques.\")</script>";
			?><a href="" onClick="javascript:window.history.go(-1)">retour au formulaire</a><?php 
		}
		
			else 
			{
				// Récupération des paramètres POST ($bdd = $_POST["site"];)
				$nomUser = $_POST["nomUser"];
				$mdpUser = $_POST["mdpUser"];
				$droitUser = $_POST["droitUser"];
			
				// on se connecte à notre base
				$base = mysql_connect ('localhost', 'root', '');
				mysql_select_db ('usep', $base) ;
				
				//Requète d'insertion des valeurs reçu en paramêtres dans la bdd
				$requete = "INSERT INTO user VALUES ('','$nomUser','$mdpUser','$droitUser')";
		
				// on insere le tuple (mysql_query) et au cas où, on écrit un petit message d'erreur si la requête ne se passe pas bien (or die)
				mysql_query ($requete) or die ('Erreur SQL !'.$requete.'<br />'.mysql_error());
				
				// on ferme la connexion à la base
				mysql_close();
							
				header('location: ../index.php');
			}
		
	}
	else
	{
		if(isset($_POST["nomEcole"]) && isset($_POST["cpEcole"]) && isset($_POST["villeEcole"])
				&& isset($_POST["mailEcole"]) && isset($_POST["telEcole"]) && isset($_POST["mdpEcole1"]) && isset($_POST["mdpEcole2"]))
		{
			if($_POST["mdpEcole1"] != $_POST["mdpEcole2"])
			{
				echo "<script>alert(\"Erreur : Les deux mots de passe saisis ne sont pas identiques.\")</script>";
				?><a href="" onClick="javascript:window.history.go(-1)">retour au formulaire</a><?php
				}
				
					else 
					{
						// Récupération des paramètres POST ($bdd = $_POST["site"];)
						$nomEcole   = $_POST["nomEcole"];
						$cpEcole    = $_POST["cpEcole"];
						$villeEcole = $_POST["villeEcole"];
						$mailEcole  = $_POST["mailEcole"];
						$telEcole   = $_POST["telEcole"];
						$mdpEcole   = $_POST["mdpEcole"];
					
						// on se connecte à notre base
						$base = mysql_connect ('localhost', 'root', '');
						mysql_select_db ('usep', $base) ;
						
						//Requète d'insertion des valeurs reçu en paramêtres dans la bdd
						$requete = "INSERT INTO ecole VALUES ('','$nomEcole','$cpEcole','$villeEcole','$mailEcole','$telEcole','$mdpEcole')";
				
						// on insere le tuple (mysql_query) et au cas où, on écrit un petit message d'erreur si la requête ne se passe pas bien (or die)
						mysql_query ($requete) or die ('Erreur SQL !'.$requete.'<br />'.mysql_error());
						
						// on ferme la connexion à la base
						mysql_close();
		
						
						header('location: ../index.php');
						echo "<script>alert(\"Bravo : Ecole bien enregistrée.\")</script>";
						
					}
				
			}
			else
			{
				
			}
	}


?>