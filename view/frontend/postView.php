<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		


		
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


	<?php while($comment = $comments->fetch()): ?>

	</p>
	<strong> le <?= $comment['created_date_fr']; ?></strong><br/>
	<?= htmlspecialchars($comment['content']); ?><br/>
	
	<?php endwhile; ?> 

</div>
		

		

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


