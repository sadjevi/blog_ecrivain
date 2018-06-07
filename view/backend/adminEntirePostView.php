<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php') ?>


		
<p><a href="index.php?action=adminListPosts">Retour à la liste des billets</a></p>



<div class="commentsheet">

	<div class="billets2">
	
		<div class="btitle">
			<h3>
			<?= htmlspecialchars($post['title']); ?><em> le <?= $post['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div class="posts"
			<p>
			<?= htmlspecialchars($post['post']); ?><br/>
		</div> 
	</div>

</div>

				


       
   </p>

<div class='comments'>
	<div class="ctitle">
		<h3>Commentaires</h3>
	</div>

	<div class="content">
		<?php while($comment = $rComment->fetch()): ?>

		</p>
		<strong><?= htmlspecialchars($comment['author']); ?></strong><em> le <?= $comment['created_date_fr']; ?></em><br/>
		<?= htmlspecialchars($comment['content']); ?><br/>
		id <?= htmlspecialchars($comment['id']); ?><br/>


		<em><a href="index.php?action=approveCom&amp;id=<?= $comment['id']; ?>"><input type="button" name="approuver "value="approuver"</a></em>

		<em><a href="index.php?action=deleteComment&amp;id=<?= $comment['id']; ?>"><input type="button" name="suppimer "value="supprimer"</a></em>

		<?php endwhile; ?>
	</div>
</div>
		

		

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


