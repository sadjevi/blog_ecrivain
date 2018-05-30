<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php') ?>



		
<p><a href="index.php?action=adminListPosts">Retour à la liste des billets</a></p>


<div id="commentsheet">

	<div id="billets2">
	
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

	
	
	
	<div id="form">	
		<form action="index.php?action=postComment&amp;id=<?= $post['id'] ?>" method="post">

		   	<div id=formtitle>
		    	<legend>Ajouter un commentaire</legend> 
		    </div>

		    <div id=author>
	       		<label for="auteur">auteur</label><br/>
	       	</div>

	       		<input type="text" name="author" id="author" /><br/>
	       	

	       	
	       	<label for="commentaire">inscrire votre commentaire ici</label><br />
	       
	       	<textarea name="content" id="content" rows="10" cols="50"></textarea><br/>
	       	<input type="submit" value="Envoyer" />
		   
		</form>

	</div>
</div>

				


       
   </p>

<div id='comments'>
	<div id="ctitle">
		<h3>Commentaires</h3>
	</div>

	<div id="content">
		<?php while($comment = $comments->fetch()): ?>

		</p>
		<strong><?= htmlspecialchars($comment['author']); ?></strong><em> le <?= $comment['created_date_fr']; ?></em><br/>
		<?= htmlspecialchars($comment['content']); ?><br/>
		id <?= htmlspecialchars($comment['id']); ?><br/>


		<em><a href="index.php?action=deleteComment&amp;id=<?= $comment['id']; ?>"><input type="button" name="suppimer "value="supprimer"</a></em>

		<?php endwhile; ?>
	</div>
</div>
		

		

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


