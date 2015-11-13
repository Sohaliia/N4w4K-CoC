
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<?php require_once("PanneauConnexion.php"); ?>	
		<title>USEP 49 - inscription Membres</title>
	</head>
	
	<body>
	    <div id="container">
			<div id="content" style="padding-top:100px;">
				<?php
					include_once('class/autoload.php');
							   	
					$site = new page_base('accueil');
					$site->corps = '<article> 
					<div id="decoh1"><h1>S\'enregistrer comme membre</h1></div><br>
					<h3><center>Pour vous inscrire veuillez renseigner vos informations.</center></h3>
					<form id="inscription" action="class/controleur.php" method="POST">
						<div class="control">		
							<ul>
								<li>
						        	<label for="nomUser">nom :</label>
						            <input type="text" name="nomUser" minlength="6" required size="40" placeholder="Identifiant" autofocus maxlength="30"/>
						        </li>
								<li>
						        	<label for="mdpUser">Mot de passe :</label>
						            <input type="password" name="mdpUser1" required size="40" minlength="6" placeholder="Mot de passe" maxlength="30"/>
						        </li> 			
    							<li>
						        	<label for="mdpUser">Verif mot de passe :</label>
						            <input type="password" name="mdpUser2" required size="40" minlength="6" placeholder="Verif mot de passe" maxlength="30"/>
						        </li> 
								<li>
						    		<label for="droitUser">Statut :</label>
						    		<select name="droitUser" required>
										<option value=""> ----- Choisir ----- </option>
										<option value="2"> Chef d\'etablissement </option>
										<option value="3"> Membre </option>
									</select>
    							</li>	      											        
							</ul>
						</div>
				    <p>
				        <button type="reset" class="right">Reinitialiser le formulaire</button>
						<button type="submit" class="action">Soumettre le formulaire</button>
				    </p>
				    </form></article>';
					$site->affiche();
				?>
			</div>		
		</div>
	</body>
</html>



