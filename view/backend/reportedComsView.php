<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->

<? require_once('session_verif.php') ?>





<p><a href="index.php?action=adminListPosts">Retour à la liste des billets</a></p>


<div class='comments'>
	<div class="ctitle">
		<h3>Commentaires signalés</h3>
	</div>

	<div class="content">
		<?php while($rc = $rComments->fetch()): ?>

		</p>
		<strong><?= htmlspecialchars($rc['author']); ?></strong><em> le <?= $rc['created_date_fr']; ?></em><br/>
		<?= htmlspecialchars($rc['content']); ?><br/>
		
		<em><a href="index.php?action=adminPostRep&amp;id=<?= $rc['post_id']; ?>">revoir article</a></em>


		<?php endwhile; ?>
	</div>
</div>




<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

