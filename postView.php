<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		


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

				<p><a href="index.php">Retour à la liste des billets</a></p>

					<div id="billets">
						<div id="btitle">
							<h3>
							<?= htmlspecialchars($post['title']); ?><em> le <?= $post['creation_date_fr']; ?></em>
							</h3>
						</div>
						<div id="posts"
							<p>
							<?= htmlspecialchars($post['post']); ?><br/> 

						</div>
					</div>
					<div id='comments'>
						<h3>Commentaires></h3>
					<?php

					while($comment = $comments->fetch())
					{
					?>
					
						</p>
						<strong> le <?= $comment['created_date_fr']; ?></strong><br/>
						<?= htmlspecialchars($comment['content']); ?><br/> 
					<?php
					}
					?>
					</div>


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
		

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->