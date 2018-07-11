<?php $title = 'suppression d un billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php') ?>


<div class="empty"></div>


<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a class="btn btn-info" href="index.php?action=adminListPosts"><span class="glyphicon glyphicon glyphicon-arrow-left"></span>Retour aux chapitres </a>
			</div>
		</div>
	<div class="chaps">
		<div class="row">
			<div class="billetscont">
				<div class="col-md-10 col-lg-offset-1">
					<div class="row">
						<div class="chaptitle">
							<div class="col-md-12">
								<h3>
								Chapter <?= htmlspecialchars($post['id']); ?><br/>
								<?= htmlspecialchars($post['title']); ?><br/><em> le <?= $post['creation_date_fr']; ?></em>
								</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="chapcontent">
							<div class="col-md-12">
								<p>
								<?= htmlspecialchars($post['post']); ?> ... <br/>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-10 col-lg-offset-1">
		<form action="index.php?action=deletePost&amp;id=<?= $post['id'] ?>" method="post">
			<div class="legendclass">
	  			<legend>Action définitive ,êtes-vous sûr de bien vouloir supprimer ce billet</legend>
	  		</div>
	  		<div class="row">
	  			<div class="col-md-12">
	  				<div class=delete>
	  					<button class="btn btn-danger btn-sm " input type="submit"><span class="glyphicon glyphicon glyphicon-remove"></span> oui je souhaite définitivement supprimer </button>
	  				</div>
	  			</div>
	  		</div>
		</form>
	</div>
</div>

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->
