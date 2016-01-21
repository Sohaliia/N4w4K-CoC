
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  	<title>USEP 49 - Contact</title>
  	<?php require_once("PanneauConnexion.php"); ?>	
</head>

<body>
    <div id="container">
		<div id="content" style="padding-top:100px;">
			<?php
		 		// Reste de la page index
				include_once('class/autoload.php');   // pour inclure nos classes
						   	
				$site = new page_base('contact');
				$site->corps = '
				<div id="decoh1"><h1>Contact</h1></div><br>
				<h3><center>Pour nous contacter, remplissez ce formulaire.</center></h3>
				<form action="mailto:chevalier.lila@gmail.com" method="post" name="contact">
				<ul>
			        <li>
			        	<label for="name">Nom : </label>
			            <input type="text" size="40" name="nom" />
			        </li> 
					<li>
			        	<label for="name">Ecole representee :  </label>
			            <input type="text" size="40" name="ecole" />
			        </li>
					<li>
			        	<label for="name">Votre message :  </label>
						<textarea name="message" rows="2" cols="30"></textarea>
			        </li>
				</ul>
			    <p>
			        <button type="submit" class="action">Valider le formulaire</button>
			        <button type="reset" class="right">Reinitialiser le formulaire</button>
				</p>
				';
				$site->affiche();
			?>
		
		</div><!-- / content -->		
	</div><!-- / container -->
</body>
</html>
	