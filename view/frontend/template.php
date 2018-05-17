<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title> <!-- title here -->
    <link rel="stylesheet" href="public/css/style.css" />
    
    
</head>

	<body>

		<div id="bloc_page">
			<header>
				<div id="titre principal">
					<div id="banniere">
						<div id="">
	                        <img src="" alt="" />   
	                    </div>
	                    <div id="titre2">
							<h1>UN BILLET SIMPLE POUR L'ALASKA</h1>
							<h2>by Jean Forteroche</h2>
						</div>
					</div>
				</div>


				<nav>
					
					<p><a href="#">Accueil</a></p>
					<p><a href="#">Jean FORTEROCHE</a></p>
					<p><a href="#">Selection</a></p>
					<p><a href="#">Recherche</a></p>
					<p><a href="#">Mentions légales</a></p>

				</nav>
			</header>

		
			<?= $content; ?>  <!-- content here -->

			<footer>
				<div id="foot">
					<div id="ftitle">
						<h3>FIND ME ELSEWHERE</h3>
					</div>
					<div id="bottom">
						<div id="infos">
							<h3>Infos:</h3>
							<p>Le Blog  de l'écrivain 'by Jean Forteroche' est un projet réalisé dans le cadre d'une formation OpenClassrooms</p>
						</div> 
						<div class="social">

							<p><img src="public/images/facebook.png" alt="facebook" />Facebook</p>
							<p><img src="public/images/insta.png" alt="insta" />Instagram</p>
							<p><img src="public/images/twitter.png" alt="twitter" />twitter</p>
							<p><img src="public/images/google.png" alt="google" />Google +</p>
									
						</div>
						<div id="logo">
							<h3>Built by:</h3>
							<p><img src="public/images/logo_digitalizer.png" alt="digitalizer" /></p>

						</div>


					</div>
					<p><a href="index.php?action=getlogin">administration du site</a></p>
					 
				</div>
				<div id="final">
					<p>© 2018, UN BILLET SIMPLE POUR L'ALASKA by STEPHANE ADJEVI – ALL RIGHTS RESERVED – CREDITS</p>
					<?php if(isset($_SESSION['auth'])):?>
						Vous êtes connecté en tant que <?= $_SESSION['login'];?>
						<br/>
						<a ref="index.php?action=logOut">se déconnecter</a>
					<?php endif;?>
				</div>

			</footer>
		</div>
		
	</body>
</html>
