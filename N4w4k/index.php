
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<?php require_once("PanneauConnexion.php");?>
  	<title>N4w4K - Accueil</title>
</head>

<body>
	<div id="container">
		<div id="content" style="padding-top:100px;">
			<?php
			 	// Reste de la page index
				include_once('class/autoload.php');   // pour inclure nos classes
							   	
				$site = new page_base('accueil');
				$site->corps = '<br/><h3>N4w4K -- Clash Of Clan</h3> 
					<p>Site toujours en construction...</p>';
				$site->affiche();
			?>
		</div>	
	</div>
</body>

</html>


	