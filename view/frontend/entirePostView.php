<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->


<div class="empty"></div>


<div class="container">
		<div class="row">
			<div class="col-md-4">
				<a class="btn btn-info" href="index.php"><span class="glyphicon glyphicon glyphicon-arrow-left"></span>Retour aux chapitres </a>
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
								<div class="combutton">
									<a class="btn btn-primary" href="index.php?action=post&amp;id=<?= $post['id']; ?>"><span class="glyphicon glyphicon glyphicon-comment"></span> Commentaires </a>
								</div>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->