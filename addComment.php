<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		



<p> Ajout d'un nouveau billet</p>




<div id="form">	
		<form action="index.php?action=newPost" method="post">

		   	<label for="title">titre :</label><br/>
       		<input type="text" name="title" id="title" /><br/>

       		<label for="post">écrire votre contenu ici</label><br /><br/>
	       
	       	<textarea name="post" id="post" rows="10" cols="50"></textarea><br/><br/>

	       	<input type="submit" value="Envoyer" /> 
	    </form>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


