<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->

<div id="start">

	<h2>Carnet de voyages</h2>
	<p>
	vous retrouverez ici mes différents posts òu je fais part de mon séjour,<br/> 
	j'essayerais d'en mettre un petit peu tout les jours<br/>
	surtout n'oubliez pas d'aller faire un tour sur les réseaux <br/>
	j'y suis aussi......;)
	</p>

</div>


<em><a href="index.php?action=listLastPosts">ajouter</a></em>


		

<?php while ($data = $posts->fetch()): ?>


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
		<p><a href="index.php?action=toupdtPost&amp;id=<?= $data['id']; ?>">modifier</a></em></p>
		<p><a href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>">supprimer</a></em></p>
		
	</div>

<?php endwhile; ?>
		
       

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

		
