<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->

<? require_once('session_verif.php') ?>


<div id="start">

	<h2>Carnet de voyages</h2>
	<p>
	vous retrouverez ici mes différents posts òu je fais part de mon séjour,<br/> 
	j'essayerais d'en mettre un petit peu tout les jours<br/>
	surtout n'oubliez pas d'aller faire un tour sur les réseaux <br/>
	j'y suis aussi......;)
	</p>

</div>




<em><a href="index.php?action=listLastPosts">Créer un nouvel article</a></em><br/>

<p><a href="index.php?action=getRepComs">vous avez <?= $cNbr; ?> messages à moderer </a></em></p>


		<?php
		echo 'vous avez ' . $cNbr . ' messages à modérer'
		?>

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

<?php

if(isset($_GET['sheet']) && $_GET['sheet'] > 0) 
		{
	 		$currentsheet = $_GET['sheet'];
	     	if($currentsheet > $sheetnbr) 
		    {
		          $currentsheet = $sheetnbr;
		    }
		}
		else 
		{
		     $currentsheet = 1;    
		}

echo 'page : ';

for ($sheet = 1 ; $sheet <= $sheetnbr ; $sheet++)
{
	if($sheet == $currentsheet)
	{
		echo '[ ' . $_GET['sheet'] . '] ';
	}
	
	else
	{
	   echo '<a href="index.php?sheet=' . $sheet . '">' . $sheet . '</a> ';
	}
	
}

?>
		
       

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

		