<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php') ?>


<<<<<<< HEAD
<div class="container">
	<div class="row">
			<div class="col-md-4">
				<a class="btn btn-info" href="index.php?action=adminListPosts"><span class="glyphicon glyphicon glyphicon-arrow-left"></span>Retour aux chapitres </a>
			</div>
		</div>
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
	  					<textarea id="post" name="datas[post]" rows="10" cols="50" class="tinymce"><?= $post['post'];?></textarea>
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
=======




<p><a href="index.php?action=adminListPosts">Retour à la liste des billets</a></p>


<p> modification du billet</p>

	<div class="billets">
		<div class="btitle">
				<h3>
				Chapter <?= htmlspecialchars($post['id']); ?><br/>
				<?= htmlspecialchars($post['title']); ?><br/><em> le <?= $post['creation_date_fr']; ?></em>
				</h3>
		</div>
		<div class="posts">
				<p>
				<?= htmlspecialchars($post['post']); ?><br/>
				</p>
		</div>
	</div> 




	<div class="upform">	

		<form action="index.php?action=save" method="post">

			<div class="formtitle">
			   	<legend>editer un  billet</legend> 
			</div>
		   
		   <input type="hidden" name="datas[id]" value= "<?= $post['id']; ?>"/>

	   		<input type="text" name="datas[title]" id="title" value= "<?= $post['title']; ?>"/><br/>

	   		<label for="post"> votre contenu </label><br /><br/>
	       
	       	<textarea class="tinymce" name="datas[post]" id="post" rows="10" cols="50">
	       		<?= $post['post'];?>
	       	</textarea><br/><br/>
	       	

	       	<input type="submit" value="<?= $button; ?>" /> 

	    </form>
>>>>>>> parent of ce2b364... backend bootstrapping
	</div>

<<<<<<< HEAD
<script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/init-tinymce.js"></script>

	
=======






>>>>>>> parent of ce2b364... backend bootstrapping
<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


