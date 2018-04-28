<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		



<p> modification du billet</p>


<div id="btitle">
			<h3>
			<?= htmlspecialchars($post['title']); ?><em> le <?= $post['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div id="posts"
			<p>
			<?= htmlspecialchars($post['post']); ?><br/>
		</div> 





		<form action="index.php?action=adjustPost&amp;id=<?= $post['id'] ?>" method="post">

		   	<label for="title">titre :</label><br/>
       		<input type="text" name="title" id="title" /><br/>

       		<label for="post">écrire votre contenu ici</label><br /><br/>
	       
	       	<textarea name="post" id="post" rows="10" cols="50">
	       	
	       </textarea><br/>

	       	<input type="submit" value="Envoyer" /> 
	    </form>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


