<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>le-blog-de-l'ecrivain</title>
    
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
			<div id="start">

				<h2>Carnet de voyages</h2>
				<p>
				vous retrouverez ici mes différents posts òu je fais part de mon séjour,<br/> 
				j'essayerais d'en mettre un petit peu tout les jours<br/>
				surtout n'oubliez pas d'aller faire un tour sur les réseaux <br/>
				j'y suis aussi......;)
				</p>
			</div>



		<?php
	
		try
		{
			$bdd = new PDO('mysql:host=localhost:8889;dbname=P3;charset=utf8', 'root', 'root');
		}
		catch(Exception $e)
		{
		        die('Erreur : '.$e->getMessage());
		}

		$req = $bdd->query('SELECT * FROM billets');
		while ($billets = $req->fetch())				
		{
		?>
			<div id="billets">
				<div id="btitle">
					<h3>
					<?php echo $billets['titre']; ?><em>: le <?php echo $billets['date_creation']; ?></em>
					</h3>
				</div>
				<div id="posts"
					<p>
					<?php echo $billets['billet']; ?><br/> 
					</p>
				</div>
			</div>
		<?php
		} 
		$req->closeCursor();
		?>

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

						<p><img src="facebook.png" alt="Photo de montagne" />Facebook</p>
						<p><img src="insta.png" alt="Photo de montagne" />Instagram</p>
						<p><img src="twitter.png" alt="Photo de montagne" />twitter</p>
						<p><img src="google.png" alt="Photo de montagne" />Google +</p>
								
					</div>
					<div id="logo">
						<h3>Built by:</h3>
						<p><img src="logo_digitalizer.png" alt="Photo de montagne" /></p>
					</div>

				</div>
				 
			</div>
			<div id="final">
				<p>© 2018, UN BILLET SIMPLE POUR L'ALASKA by STEPHANE ADJEVI  LE BLOG DE  – ALL RIGHTS RESERVED – CREDITS</p>
			</div>

		</footer>
	</div>

	

</body>

