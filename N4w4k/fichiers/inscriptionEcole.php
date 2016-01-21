
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<?php require_once("PanneauConnexion.php"); ?>	
		<title>USEP 49 - inscription Ecole</title>
	</head>

	<body>
	    <div id="container">
			<div id="content" style="padding-top:100px;">
				<?php
					include_once('class/autoload.php');   // pour inclure toutes les classes dans le dossier class
							   	
					$site = new page_base('accueil');
					$site->corps = '<article> 
					<div id="decoh1"><h1>Inscription des &eacute;coles</h1></div><br>
					<h3><center>Pour vous inscrire veuillez renseigner vos informations.</center></h3>
					<form id="inscription" action="class/controleur.php" method="POST">
						<div class="control">		
							<ul>
						        <li>
						        	<label for="nomEcole">nom de l\'ecole :</label>
						            <input type="text" name="nomEcole" minlength="6" required size="40" placeholder="Nom de l\'&eacute;cole" autofocus maxlength="40"/>
						        </li>
								<li>
							        <Label for ="cpEcole">Code postal :</Label>
							        <input type="text" name="cpEcole" size="5" minlength="5" maxlength="5" required placeholder="44000"/>
						        </li> 
								<li>
						        	<label for="villeEcole">Ville :</label>
						            <input type="text" name="villeEcole" minlength="3" required size="40" placeholder="Ville de l\'&eacute;cole" maxlength="40"/>
						        </li> 					        
						        <li>
						        	<label for="mailEcole">Mail de contact:</label>
						            <input type="email" name="mailEcole" minlength="6" required size="40" placeholder="Mail de l\'&eacute;cole" maxlength="40"/>
						        </li>
						        <li>
							        <Label for ="telEcole">Telephone :</Label>
							        <input type="text" name="telEcole" size="10" minlength="10" maxlength="10" required placeholder="0102030405"/>
						        </li>
								<li>
						        	<label for="mdpEcole">Mot de passe :</label>
						            <input type="password" name="mdpEcole1" size="40" minlength="6" maxlength="40" required placeholder="Mot de passe"/>
						        </li> 	
								<li>
						        	<label for="mdpEcole">Mot de passe :</label>
						            <input type="password" name="mdpEcole2" size="40" minlength="6" maxlength="40" required placeholder="Mot de passe"/>
						        </li> 				        
							</ul>
						</div>
				    <p>
				        <button type="submit" class="action">Soumettre le formulaire</button>
				        <button type="reset" class="right">Reinitialiser le formulaire</button>
				    </p>
				    </form></article>';
					$site->affiche();
				?>
			
			</div><!-- / content -->		
		</div><!-- / container -->
	</body>
</html>
	