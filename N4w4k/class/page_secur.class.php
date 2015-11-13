<?php
include_once ('config.inc.php');
session_start ();

class page_securisee extends page_base 
{
	// reecriture du constructeur
	public function __construct($p) 
	{
		parent::__construct ( $p );
		if (isset ( $_POST ['idUser'] ) && connexion_site ( $_POST ['idUser'], $_POST ['mdpUser'] )) 
		{
			$_SESSION ['idUser'] = $_POST ['idUser'];
		}
	}
	
	// recriture de la methode affiche_contenu (bien verifier que cette methode est
	// en visibilite protected aussi dans la classe mere a page_base )
	protected function affiche_contenu() 
	{
		if (isset ( $_SESSION ['idUser'] ))
			parent::affiche_contenu ();
		else
			include ('connexpdo.php');
	}
	
	/** ************ Affichage du menu de la page (mode connecte) ************* **/
	 
	protected function affiche_menu() 
	{
		$sql = 'SELECT idDroit FROM user WHERE nomUser = "'.$_SESSION['nomUser'].'"';  
		if (isset ( $_SESSION ['nomUser'] )) 
		{
			// Si utilisateur est administrateur
			if (utilCoTypeC ( $_SESSION ['droitUser'] ) == 1)
			{
				
			}  
			
			// Si utilisateur est chef d'établissement
			else 
			{
				if (utilCoTypeC ( $_SESSION ['droitUser'] ) == 2)
				{
				
				}
			 
			
			// Si utilisateur est membre
			else
			{
				if (utilCoTypeC ( $_SESSION ['droitUser'] ) == 3)
				{
			
				}
			}
			
			}
		}
	}
}
?>




