<?php

	include_once('class/autoload.php');   // pour inclure toutes les classes dans le dossier class
	
	function inscription($nom,$mdp,$email,$tel)
	{
		global $bdd;
		$reponse = $bdd->query("Select * from ecole where nom='$nom'");
		$donnees = $reponse->fetchAll();
		
		if($reponse->rowCount() == 0)
		{
			$req = $bdd->prepare("INSERT INTO ecole values('','$nom','$mdp','$email','$tel')");
			$resultatreq = $req->execute();
			return $resultatreq;
		}
		
		else
		{
			return false;
		}
	}
	
?>
