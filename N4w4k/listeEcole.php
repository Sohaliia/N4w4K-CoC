<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<?php require_once("PanneauConnexion.php");?>	
		<title>USEP 49 - inscription Ecole</title>
	</head>

	
	<body>
	    <div id="container">
			<div id="content" style="padding-top:100px;">
				<?php
					include_once('class/autoload.php');   // pour inclure toutes les classes dans le dossier class
							   	
					$site = new page_base('accueil');
					$site->corps = '<article> 
					<div id="decoh1"><h1>Liste des &eacute;coles</h1></div><br>	
	
					</article>';

					$site->les_ecoles();
					
					$site->affiche();
				?>
			
			</div><!-- / content -->		
		</div><!-- / container -->
	</body>
</html>
	