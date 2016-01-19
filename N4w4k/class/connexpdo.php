<!--  fonction pour se connecter à la bdd -->

<?php
function connexpdo() 
{
        global $local;
        
        $PARAM_hote = 'localhost';
        $PARAM_utilisateur = 'n4w4k';
        $PARAM_mot_passe = 'clash';
        $PARAM_nom_bd = 'n4w4k';
        
        try 
        {
        	$connexion = new PDO ( 'mysql:host=' . $PARAM_hote . ';dbname=' . $PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe );
            //echo 'Connexion reussie';
                
            return $connexion;
        } 
        catch ( PDOException $e ) 
        {
        	//Affiche le message d'erreur
            echo 'Exception reçue : ', $e->getMessage (), '/n';
            return false;
        }
}
// $connexion est utilisé dans chaques fonctions pour pouvoir appeler la BDD
$connexion = connexpdo ();
?>