<!--  Definition de la class de connection à la bdd -->

<?php
class connexpdo 
{
	private $PARAM_hote = 'localhost'; // le chemin vers le serveur
	private $PARAM_utilisateur = 'n4w4k'; // nom d'utilisateur pour se connecter
	private $PARAM_mot_passe = 'clash'; // mot de passe de l'utilisateur pour se connecter
	private $PARAM_nom_bd = 'n4w4k'; // nom de la base de donnee
	private $connexion;
	
	public function __construct() 
	{
		try 
		{
			$this->connexion = new PDO ( 'mysql:host=' . $this->PARAM_hote . ';dbname=' . $this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe, 
					array ( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' ) );
		} 
		catch ( PDOException $e ) 
		{
			echo 'Erreur : ' . $e->getMessage () . '<br />';
			echo 'N° : ' . $e->getCode ();
			$this->connexion = FALSE;
		}
	}
	
	public function __get($propriete) 
	{
		switch ($propriete) 
		{
			case 'connexion' :
				{
					return $this->connexion;
					break;
				}
		}
	}
}
?>
 
