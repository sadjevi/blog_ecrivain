<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title> <!-- title here -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style.css" />
    
    
</head>

	<body>
		<div class="bloc_page">
			<header>
				<div class="container-fluid">
				    <div class="row">
				    	<div class="col-md-12">   		 
				 			<div class="fimg"><img src="public/images/rainbow.jpg" alt="banniere">		
				    			<div class="col-md-12">
				    				<div class="nouveautitre">
									    <div class="col-md-12"><h1>UN BILLET SIMPLE POUR L'ALASKA</h1></div>
									    <div class="col-md-12"><h2>by Jean Forteroche</h2></div>
									</div>
								</div>
							</div>			    				
				    	</div>

		    		</div>
			    </div>
				
			
				
		
			<?= $content; ?>  <!-- content here -->
			

			<footer>
				<div class="foot">
					<div class="ftitle">
						<h3>FIND ME ELSEWHERE</h3>
					</div>
					<div class="bottom">
						<div class="infos">
							<h3>Infos:</h3>
							<p>Le Blog  de l'écrivain 'by Jean Forteroche' est un projet réalisé dans le cadre d'une formation OpenClassrooms</p>
						</div> 
						<div class="social">

							<p><img src="public/images/facebook.png" alt="facebook" />Facebook</p>
							<p><img src="public/images/insta.png" alt="insta" />Instagram</p>
							<p><img src="public/images/twitter.png" alt="twitter" />twitter</p>
							<p><img src="public/images/google.png" alt="google" />Google +</p>
									
						</div>
						<div class="logo">
							<h3>Built by:</h3>
							<p><img src="public/images/logo_digitalizer.png" alt="digitalizer" /></p>

						</div>


					</div>
					<div class="admin">
					<p><a href="index.php?action=getlogIn">administration du site</a></p>
					</div>	 
				</div>

				<div class="final">
					<p>© 2018, UN BILLET SIMPLE POUR L'ALASKA by STEPHANE ADJEVI – ALL RIGHTS RESERVED – CREDITS</p>
					<?php if(isset($_SESSION['auth'])):?>
						Vous êtes connecté en tant que <?= $_SESSION['login'];?>
						<br/>
						<a href="index.php?action=getlogOut"><input type="button" name="Se deconnecter"value="Se deconnecter"></a><br/>
					<?php endif;?>
				</div>

			</footer>
		</div>
		
	</body>
</html>
