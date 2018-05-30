<?php $title = 'suppression d un billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		


<? require_once('session_verif.php') ?>





<p><a href="index.php?action=adminListPosts">Retour à la liste des billets</a></p>


<div id="btitle">
			<h3>
			<?= htmlspecialchars($post['title']); ?><em> le <?= $post['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div id="posts"
			<p>
			<?= htmlspecialchars($post['post']); ?><br/>
		
		</div> 

		<div id="form">	

			<form action="index.php?action=deletePost&amp;id=<?= $post['id'] ?>" method="post">

			   	<div id=formtitle>
			    	<legend>etes vous bien sur de vouloir supprimer ce billet?</legend> 
			    </div>

			    <div id=delete>
		       		<input type="submit" value="Oui je souhaite definitivement supprimmer ce billet" />
		       	</div>		       				       		      
			   
			</form>

		</div>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->
