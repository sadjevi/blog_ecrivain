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
		<em><a class="btn btn-secondary" href="index.php?action=listLastPosts"><span class="glyphicon glyphicon glyphicon-plus"></span> Création d'un nouveau billet </a><em>
	</div>
</div>

<div class="container">
	<?php while ($data = $posts->fetch()): ?>
		<div class="chaps">
			<div class="row">
				<div class="billetscont">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="chaptitle">
								<div class="col-md-12">
									<h3>
									Chapter <?= htmlspecialchars($data['id']); ?><br/>
									<?= htmlspecialchars($data['title']); ?><br/><em> le <?= $data['creation_date_fr']; ?></em>
									</h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="chapcontent">
								<div class="col-md-12">
									<p>
									<?= htmlspecialchars(substr($data['post'], 1, 300)); ?> ... <br/>
									<div class="suitebutton">
										<a class="btn btn-primary" href="index.php?action=getEntirePost&amp;id=<?= $data['id']; ?>">lire la suite <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="buttons">
					<div class="updtbutton">
						<div class="col-md-3"><a class="btn btn-info" href="index.php?action=toupdtPost&amp;id=<?= $data['id']; ?>"> Modifier <span class="glyphicon glyphicon glyphicon-pencil"></span></a>
						</div>
					</div>
						<div class="delbutton">
							<div class="col-md-offset-6 col-md-3"><a class="btn btn-danger" href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>"> Supprimer <span class="glyphicon glyphicon glyphicon-remove"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<?php endwhile;?>

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

<? require('view/frontend/pagination.php'); ?>

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

		
