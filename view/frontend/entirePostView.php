<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		
<nav>
					
					<p><a href="index.php?action=accueil">Accueil</a></p>
					<p><a href="index.php?action=jf">Jean FORTEROCHE</a></p>
					<p><a href="index.php?action=selection">Selection</a></p>
					<p><a href="index.php?action=ml">Mentions légales</a></p>

				</nav>
			</header>






	<div class="billets">
		<div class="btitle">
			<h3>
			Chapter <?= htmlspecialchars($post['id']); ?><br/>
			<?= htmlspecialchars($post['title']); ?><br/><em> le <?= $post['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div class="posts">
			<p>
			<?= htmlspecialchars($post['post']); ?> ... <br/> 
			<div class="combutton">
				<a class="btn btn-primary" href="index.php?action=post&amp;id=<?= $post['id']; ?>">Commentaires <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
			</div>
			</p>
		</div>
		
	</div>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->