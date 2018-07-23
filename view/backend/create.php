<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php') ?>


<div class="empty"></div>


<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a class="btn btn-info" href="index.php?action=adminListPosts"><span class="glyphicon glyphicon glyphicon-arrow-left"></span>Retour aux chapitres </a>
		</div>
	</div>
	<div class="newchap">
		<div class="row">
			<div class="col-md-10 col-lg-offset-1">
				<form action="index.php?action=save" method="post">
					<div class="legendclass">
			  			<legend>Edition d un nouveau billet</legend>
			  		</div>
			  		<input type="hidden" name="datas[id]" value= "<?= $datas['id']; ?>"/>
			  		<div class="row">
			  			<div class="col-md-3">
			  				<div class=author>
			  					<label for="title">Titre du capitre : </label>
			  					<input id="title" type="text" name="datas[title]" id="title" value= "<?= $datas['title']; ?>" class="form-control">
			  				</div>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<div class=uppost>
			  					<label for="post"> Contenu du billet : </label>
			  					<textarea id="post" name="datas[post]" rows="10" cols="50" class="tinymce"><?=htmlspecialchars($datas['post']);?></textarea>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<div class=uppostbutton>
			  					<button class="btn btn-primary btn-sm "input type="submit"><span class="glyphicon glyphicon glyphicon-ok-sign"></span><?= $button; ?></button>
			  				</div>
			  			</div>
			  		</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<h3 style="text-align:center">vos bilets récents</h3>
	<?php while ($data = $lastPosts->fetch()): ?>
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
									<p><?= htmlspecialchars(substr($data['post'], 1, 300)); ?> ... <br/></p>
									<div class="suitebutton">
										<a class="btn btn-primary" href="index.php?action=getEntirePost&amp;id=<?= $data['id']; ?>">lire la suite <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</div>

<script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/init-tinymce.js"></script>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


