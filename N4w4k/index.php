
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<?php require_once("PanneauConnexion.php");?>
  	<title>USEP 49 - Accueil</title>
</head>

<body>
	<div id="container">
		<div id="content" style="padding-top:100px;">
			<?php
			 	// Reste de la page index
				include_once('class/autoload.php');   // pour inclure nos classes
							   	
				$site = new page_base('accueil');
				$site->corps = '<br/><h3>Bienvenue sur le site de l\'USEP49</h3> 
					<p>Site toujours en construction...</p>
					<p> Les &eacute;coles pouront ici s\'inscrire, afin d\'enregistrer les &eacute;leves participant aux cross organis&eacute; par l\'USEP. 
					<br/><br/>L\'Union sportive de l\'enseignement du premier degr&eacute; (USEP) est la f&eacute;d&eacute;ration de sport scolaire de l\'ecole 
					primaire francaise. Evoluant au sein de la ligue de l\'enseignement, elle est plac&eacute;e sous la tutelle du ministre 
					charg&eacute; de l\'&eacute;ducation. L\'USEP participe a une mission de service public, qui vise l\'&eacute;ducation par le sport, 
					la formation d\'un citoyen sportif &eacute;clair&eacute;.</p>';
				$site->affiche();
			?>
		</div>	
	</div>
</body>

</html>


	