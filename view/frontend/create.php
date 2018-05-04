<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		



<p><a href="index.php">Retour à la liste des billets</a></p>



<p> Ajout d'un nouveau billet</p>




	<div id="form">	

		<form action="index.php?action=createPost" method="post">

			<div id=formtitle>
			   	<legend>editer un nouveau billet</legend> 
			</div>

			<div id=author>
		   		<label for="title">titre :</label><br/>
		   </div>

	   		<input type="text" name="title" id="title" /><br/>

	   		<label for="post">écrire votre contenu ici</label><br /><br/>
	       
	       	<textarea name="post" id="post" rows="10" cols="50"></textarea><br/><br/>

	       	<input type="submit" value="Envoyer" /> 

	    </form>
	</div>


<h3>vos bilets récents</h3>


<?php while ($data = $lastPosts->fetch()): ?>

	<div id="billets">
		<div id="btitle">
			<h3>
			<?= htmlspecialchars($data['title']); ?><em> le <?= $data['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div id="posts"
			<p>
			<?= htmlspecialchars($data['post']); ?><br/> 
			<em><a href="index.php?action=post&amp;id=<?= $data['id']; ?>">Commentaires</a></em>
			</p>
		</div>
		<p><a href="index.php?action=ppost&amp;id=<?= $data['id']; ?>">modifier</a></em></p>
		<p><a href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>">supprimer</a></em></p>
		
	</div>

<?php endwhile; ?>


<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

