<!-- Auto-chargement de classes --> 

<?php
function __autoload($nom_classe) 
{
	require_once $nom_classe . '.class.php';
	include_once("controleur.php");
}
?>