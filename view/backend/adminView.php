
<? require_once('session_verif.php') ?>



<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->


<div class="start">

	<h2>Carnet de voyages</h2>
	<p>
	vous retrouverez ici mes différents posts òu je fais part de mon séjour,<br/> 
	j'essayerais d'en mettre un petit peu tout les jours<br/>
	surtout n'oubliez pas d'aller faire un tour sur les réseaux <br/>
	j'y suis aussi......;)
	</p>

</div>

<div class="admininfos">
	<p>Bonjour <?= $_SESSION['login'];?><br/>

	 <?php

	  if($cNbr >= 1)
	  {
	  	echo '<em><a href="index.php?action=getRepComs">vous avez ' . $cNbr . ' messages à moderer </a></em><br/>' ;
	  }
	  else
	  {
	  	echo 'vous n avez aucun message à moderer <br/>';
	  } 

	 
	 ?>
	</p>

	<div class="addbutton">
		<p>
		<em><a href="index.php?action=listLastPosts"><input type="button" name="Création d'un nouvel article"value="Création d'un nouvel article"></a></em><br/>
		</p>

	</div>
</div>
	





		

<?php while ($data = $posts->fetch()): ?>


	<div class="billets">
		<div class="btitle">
			<h3>
			Chapter <?= htmlspecialchars($data['id']); ?><br/>
			<?= htmlspecialchars($data['title']); ?><br/><em> le <?= $data['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div class="posts">
			<p>
			<?= htmlspecialchars($data['post']); ?><br/> 
			</p>
		</div>
		<div class="combutton">
			<p>
			<em><a href="index.php?action=adminPost&amp;id=<?= $data['id']; ?>"><input type="button" name="Commentaires"value="Commentaires"></a></em><br/>
			</p>
		</div>

		<div class="updtbutton">
			<p>
			<a href="index.php?action=toupdtPost&amp;id=<?= $data['id']; ?>"><input type="button" name="Modifier"value="Modifier"></a><br/>
			</p>
		</div>
		<div class="delbutton">
			<p>
			<a href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>"><input type="button" name="Supprimer"value="Supprimer"></a><br/>
			</p>
		</div>
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
	(isset($_GET['sheet'])) ? $page = $_GET['sheet'] : $page = 1; 

	if(isset($_GET['sheet'])) {
		$page = $_GET['sheet'] ;
	} else {
		$page = 1;
	};

	if($sheet == $currentsheet)
	{
		echo '[ ' . $page . '] ';
	}
	
	else
	{
	   echo '<a href="index.php?action=adminListPosts&amp; sheet=' . $sheet . '">' . $sheet . '</a> ';
	}
	
}

?>
		
       

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

		
