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
								<?= htmlspecialchars($post['post']); ?><br/>
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
	<div class="coms">
		<div class="row">
			<div class="comscontent">
				<div class="col-md-10 col-lg-offset-1">
					<div class="row">
						<div class="comtitle">
							<div class="col-md-6">
								<h3>Commentaires</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="com">
							<?php if(!$comments):?>
								pas de commentaires
							<?php endif;?>
							<?php while($comment = $comments->fetch()): ?>
								<p>
									<strong><?= htmlspecialchars($comment['author']); ?></strong><em> le <?= $comment['created_date_fr']; ?></em><br/>
									<?= htmlspecialchars($comment['content']); ?><br/>
								</p>
								<div class="row">
									<div class="col-md-4">
										<div class="signalbutton">
											<a class="btn btn-link " href="index.php?action=reportCom&amp;id=<?= $comment['id']; ?>"> signaler </a>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<form class="col-md-10 col-lg-offset-1" action="index.php?action=postComment&amp;id=<?= $post['id'] ?>" method="post">
		<div class="legendclass">
  			<legend>Laisser un commentaire</legend>
  		</div>
  		<div class="row">
  			<div class="col-md-2">
  				<div class=author>
  					<label for="auteur">auteur : </label>
  					<input id="author" type="text" name="author" class="form-control">
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12">
  				<div class=newcomment>
  					<label for="Commentaire">Commentaire : </label>
  					<textarea id="content" type="textarea" name="content" rows="10" cols="50" class="form-control"></textarea>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12">
  				<div class=newcombutton>
  					<button class="btn btn-primary btn-sm " input type="submit"> Envoi <span class="glyphicon glyphicon glyphicon-ok-sign"></span></button>
  				</div>
  			</div>
  		</div>
	</form>
</div>

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


