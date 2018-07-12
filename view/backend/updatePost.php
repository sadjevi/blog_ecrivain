<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php'); ?>

<div class="empty"></div>

<div class="container">
	<div class="col-md-10 col-lg-offset-1">
		<form action="index.php?action=save" method="post">
			<div class="legendclass">
	  			<legend>Edition du billet</legend>
	  		</div>
	  		<input type="hidden" name="datas[id]" value= "<?= $post['id']; ?>"/>
	  		<div class="row">
	  			<div class="col-md-3">
	  				<div class=author>
	  					<label for="title">Titre du capitre : </label>
	  					<input id="title" type="text" name="datas[title]" id="title" value= "<?= $post['title']; ?>" class="form-control">
	  				</div>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-md-12">
	  				<div class=uppost>
	  					<label for="post"> Contenu du billet : </label>
	  					<textarea id="post" name="datas[post]" rows="10" cols="50" class="form-control"><?= $post['post'];?></textarea>
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

	
<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


