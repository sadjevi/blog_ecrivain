<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php') ?>





<p><a href="index.php?action=adminListPosts">Retour à la liste des billets</a></p>



<p> Ajout d'un nouveau billet</p>







	<div class="form">	

		<form action="index.php?action=createPost" method="post">

			<div class=formtitle>
			   	<legend>editer un nouveau billet</legend> 
			</div>

			<div class=author>
		   		<label for="title">titre :</label><br/>
		   </div>

	   		<input type="text" name="title" id="title" /><br/>

	   		<label for="post">écrire votre contenu ici</label><br /><br/>
	       
	       	<textarea class="tinymce" name="post" id="post" rows="10" cols="50"></textarea><br/><br/>

	       	<input type="submit" value="Envoyer" /> 

	    </form>
	</div>


<h3>vos bilets récents</h3>


<?php while ($data = $lastPosts->fetch()): ?>

	<div class="billets">
		<div class="btitle">
			<h3>
			<?= $data['title']; ?><em> le <?= $data['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div class="posts"
			<p>
			<?= $data['post']; ?><br/> 
			<em><a href="index.php?action=post&amp;id=<?= $data['id']; ?>">Commentaires</a></em>
			</p>
		</div>
		<p><a href="index.php?action=ppost&amp;id=<?= $data['id']; ?>">modifier</a></em></p>
		<p><a href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>">supprimer</a></em></p>
		
	</div>

<?php endwhile; ?>



<script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/init-tinymce.js"></script>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


