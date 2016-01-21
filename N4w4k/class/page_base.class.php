<?php
class page_base {

	private $titre;
	private $style=array('style');
	private $corps;
	private $page;
	
	public function __construct($p) {
		$this->page = $p;
	}

	/******************* Gestion des setters  *******************/
	public function __set($propriete, $valeur) {
		switch ($propriete) {
			case 'style' : {
				$this->style[count($this->style)+1] = $valeur;
				break;
			}
			
			case 'corps' : {
				$this->corps = $valeur;
				break; 
			}
		}
	}
	
	
	/********************* Gestion du titre  *******************/
	private function affiche_titre() {
		echo $this->titre;
	}
	
	
	/********************* Gestion du corps  *******************/
	protected function affiche_corps() {
		echo $this->corps;
	}
	
	
	/*************Gestion des styles *********************/
	private function affiche_style() {
		foreach ($this->style as $s) {
			echo "<link rel='stylesheet' href='css/style/".$s.".css' />\n";
		}
	}
	
	
	/************** Affichage du header ***************************/
	private function affiche_header() {
		?>
			<header>
				  	<title>Accueil - USEP</title>
				  	<meta name="description" content="Demo of a Sliding Login Panel using jQuery 1.3.2" />
				  	<meta name="keywords" content="jquery, sliding, toggle, slideUp, slideDown, login, login form, register" />
					<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
					<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
					
					<!-- Menu 2 -->
					<meta charset="UTF-8" />
					<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
					<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
					<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
					<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
					<link rel="shortcut icon" href="../favicon.ico"> 
					<link rel="stylesheet" type="text/css" href="css/menu-default.css" />
					<link rel="stylesheet" type="text/css" href="css/menu-component.css" />
					<script src="js/modernizr.custom.js"></script>
            </header>
		<?php
					
			}

				
		/*********** Fonction de recuperation du name ***************/

		private function recupSession()
		{
			if(isset($_POST['name']))
			{
				if(!empty($_POST['name']))
				{
					$prenom = $_POST['name'];
					setcookie('name', $prenom, time() + 365*24*3600, null, null, false, true);
					$_SESSION['$prenom'] = $prenom;
				}
			}
		} 
		
		
		/***************** Fonction de deconnexion ***************/
		
		
		public function deconnexion()
		{
			if(isset($_POST['deco']))
			{
				$_SESSION = array();
				session_destroy();
		
			}
		}
		
	/************** Affichage du pied de la page ***************************/
	private function affiche_footer() {
		?>
			<footer>
				<p id="copyright">
					Mise en page WoOlfY & SkimoO &copy; 2016
				</p>
			</footer>
		<?php
	}
	
	/************** Affichage du menu ***************************/
	private function affiche_menu() {
		?>   
		<nav>
		<div class="container">	
			<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span>Accueil</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"> 
									<i aria-hidden="true" class="icon-services"></i>
								</span>
								<span>Le clan</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i aria-hidden="true" class="icon-portfolio"></i></span>
								<span>Mon profil</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i aria-hidden="true" class="icon-blog"></i></span>
								<span>Blog</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i aria-hidden="true" class="icon-team"></i></span>
								<span>The team</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"><i aria-hidden="true" class="icon-contact"></i></span>
								<span>Contact</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		</nav>
		<?php
		}

		
	
	/************** Affichage du menu en mode connecter / droit ***************************/
		protected function affiche_droit()
		{
			// on se connecte a notre base
			$base = mysql_connect ('localhost', 'root', '');
			mysql_select_db ('usep', $base) ;
			
			$sql = 'SELECT idDroit FROM user WHERE nomUser = "'.$_SESSION['nomUser'].'"';
			mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
			if (isset ( $_SESSION ['nomUser'] ))
			{
				// Si utilisateur est administrateur
				if (utilCoTypeC ( $_SESSION ['droitUser'] ) == 1)
				{
					?>
							<nav>
								<div id='cssmenu'> 
									<ul>
									   <li class='active'><a href='index.php'><span>Accueil</span></a></li>
									   <li><a href='index.php'><span>Administration</span></a></li>
									   <li><a href='inscriptionUser.php'><span>S'enregistrer</span></a></li>
									   <li><a href='inscriptionEcole.php'><span>Inscription Ecole</span></a></li>
									   <li><a href='listeEcole.php'><span>Liste ecoles</span></a></li>
									   <li class='last'><a href='contact.php'><span>Contact</span></a></li>
									</ul>
								</div>
							</nav>
				<?php
				}
					
				// Si utilisateur est chef d'Ã©tablissement
				else
				{
					if (utilCoTypeC ( $_SESSION ['droitUser'] ) == 2)
					{
						?>
							<nav>
								<div id='cssmenu'> 
									<ul>
										<li class='active'><a href='index.php'><span>Accueil</span></a></li>
										<li><a href='inscriptionEcole.php'><span>Inscription Ecole</span></a></li>
										<li><a href='listeEcole.php'><span>Liste ecoles</span></a></li>
										<li class='last'><a href='contact.php'><span>Contact</span></a></li>
									</ul>
								</div>
							</nav>
						<?php		
					}
		
						
					// Si utilisateur est membre
					else
					{
						if (utilCoTypeC ( $_SESSION ['droitUser'] ) == 3)
						{
							?>
								<nav>
									<div id='cssmenu'> 
										<ul>
											<li class='active'><a href='index.php'><span>Accueil</span></a></li>
											<li><a href='listeEcole.php'><span>Liste ecoles</span></a></li>
											<li class='last'><a href='contact.php'><span>Contact</span></a></li>
										</ul>
									</div>
								</nav>
							<?php
						}
					}
						
				}
			}
		}
	

		
	/************* Gestion des ecoles  *******************/
		public function les_ecoles()
		{
			// on se connecte a notre base
			$base = mysql_connect ('localhost', 'root', '');
			mysql_select_db ('usep', $base) ;
			
			/* construction de la requete */
			$requete = 'SELECT nomEcole FROM ecole ORDER BY nomEcole ASC;';
		
			/* renvoie du resultat de la requete */
			return $requete;
		}
		
		
    /************** Variable pour le nom des pages ***************************/
		public function getvariable($nom)
		{
			if (isset($_GET[$nom]))
			{
				return $_GET[$nom];
			}
			else
			{
				return false;
			}
		}
			
	
	/******************** Fonction permettant l'affichage de la page **************/
	public function affiche() {
		session_start();
		$this->recupSession();
		//$this->deconnexion();
		?>
			<!DOCTYPE html>
			<html lang='fr'>
				<head>
					<title>
						<?php $this->affiche_titre(); ?>
					</title>
					<meta charset="utf-8" />
					<?php 
						$this->affiche_style(); 
					?>
				</head>
				<body>
					<div id="global">
						<?php $this->affiche_header(); ?>
						<div id="centre">
							<?php $this->affiche_menu(); ?>
						    <section>
								<article>
									<?php $this->affiche_corps(); ?>
								</article>
				            </section>
		           		 </div>
						<?php $this->affiche_footer(); ?>
				   </div>
   				 </body>
			</html>
		<?php
	}
}
?>
