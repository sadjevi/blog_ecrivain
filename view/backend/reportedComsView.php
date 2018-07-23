<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->

<? require_once('session_verif.php') ?>

<div class="empty"></div>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a class="btn btn-info" href="index.php?action=adminListPosts"><span class="glyphicon glyphicon glyphicon-arrow-left"></span>Retour aux chapitres </a>
		</div>
	</div>
	<div class="coms">
		<div class="row">
			<div class="comscontent">
				<div class="col-md-10 col-lg-offset-1">
					<div class="row">
						<div class="comtitle">
							<div class="col-md-6">
								<h3>Commentaires signalés</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="sigcom">
							<?php while($rc = $rComments->fetch()): ?>
								<p>
									<strong><?= htmlspecialchars($rc['author']); ?></strong><em> le <?= $rc['created_date_fr']; ?></em><br/>
									<?= htmlspecialchars($rc['content']); ?><br/>
								</p>
								<div class="verifbutton">
									<a class="btn btn-link " href="index.php?action=adminPostRep&amp;id=<?= $rc['post_id']; ?>"> Revoir le chapitre concerné </a>
								</div>
							<?php endwhile; ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

