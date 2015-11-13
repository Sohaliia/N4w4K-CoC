
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 

<body>
	<!-- Panneau de connexion dans le header (déroulant) -->
	<div id="toppanel">
		<div id="panel">
			<div class="content clearfix">
				<div class="left">
					<h1>N4w4K</h1>
					<h2>Espace membres</h2>		
					<p class="grey">Vous pourrez acc&egrave;der &agrave; toutes les fonctionnalit&eacute;es du site en vous enregistrant.</p>
				</div>
				
				<!-- Espace pour s'enregistrer (redirection vers la page inscription) -->
				<div class="left">
					<form class="clearfix" action="#" method="post">					
						<h1>Pas encore membre?</h1><br/>		
						<a><input type="submit" href="../inscriptionUser.php" name="submit" value="S'enregistrer" class="bt_register" /></a>
					</form>
				</div>
				
				<!-- Espace pour se connecter (deja membre) -->
				<div class="left">	
					<form action="#" method="post">
						<h1>Espace membre</h1>
							<label class="grey" for="log">Identifiant:</label>
							<input class="field" type="text" name="log" id="log" value="" size="23" />
							<label class="grey" for="pwd">Mot de passe:</label>
							<input class="field" type="password" name="pwd" id="pwd" size="23" />
			            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;Se souvenir de moi</label>
		        			<div class="clear"></div>
							<input type="submit" name="submit" value="Go" class="bt_login" />
							<a class="lost-pwd" href="#">Mot de passe perdu?</a>
							
					</form>
					
					<?php 
					if(isset($_POST["log"]))
					{ 
						$_SESSION ['nomUser'] = $_POST["log"];
					
					}?>
				</div>
		  </div>
	</div> <!-- Fin panneau de connexion -->

	<!-- Onglet du panneau de connecion (deroulant) -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li> 
			<li>Bienvenue !</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">Se connecter</a>
				<a id="close" style="display: none;" class="close" href="#">Fermer</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div>
	
	</div> <!-- Fin Onglet -->
	
</body>

</html>


	