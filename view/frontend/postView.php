<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<nav>
					
					<p><a href="index.php?action=accueil">Accueil</a></p>
					<p><a href="index.php?action=jf">Jean FORTEROCHE</a></p>
					<p><a href="index.php?action=selection">Selection</a></p>
					<p><a href="index.php?action=ml">Mentions légales</a></p>

				</nav>
			</header>
		
<p><a href="index.php">Retour à la liste des billets</a></p>


<div class="commentsheet">

	<div class="billets2">
	
		<div class="btitle">
			<h3>
			Chapter <?= htmlspecialchars($post['id']); ?><br/>
			<?= htmlspecialchars($post['title']); ?><br/><em> le <?= $post['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div class="posts">
			<p>
			<?= htmlspecialchars($post['post']); ?><br/>
			</p>
		</div> 
	</div>



	<div class='comments'>
		<div class="ctitle">
			<h3>Commentaires</h3>
		</div>

		<div class="content">
			<?php while($comment = $comments->fetch()): ?>
				<?php if(!$comment) :?>
  				<?php echo 'aucun commentaire à afficher';?>
				<?php endif;?>

			</p>
			<strong><?= htmlspecialchars($comment['author']); ?></strong><em> le <?= $comment['created_date_fr']; ?></em><br/>
			<?= htmlspecialchars($comment['content']); ?><br/>
			


			<div class="signalbutton">
				<em><a href="index.php?action=reportCom&amp;id=<?= $comment['id']; ?>"><input type="button" name="signaler "value="signaler"></a></em>
			</div>

			<?php endwhile; ?>
		</div>
	</div>

	
	
	
	<div class="form">	
		<form action="index.php?action=postComment&amp;id=<?= $post['id'] ?>" method="post">

		   	<div class=formtitle>
		    	<legend>Ajouter un commentaire</legend> 
		    </div>

		    <div class=author>
	       		<label for="auteur">auteur</label><br/>
	       	</div>

	       		<input type="text" name="author" id="author" /><br/>
	       	

	       	
	       	<label for="commentaire">inscrire votre commentaire ici</label><br />
	       
	       	<textarea name="content" id="content" rows="10" cols="50"></textarea><br/>
	       	<div class="newcombutton">
	       		<input type="submit" value="Envoyer" />
	       	</div>
		   
		</form>

	</div>

</div>
		

		

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


