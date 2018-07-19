<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->

</header>

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
				<form action="index.php?action=log_pass" method="post">
					<div class="legendclass">
			  			<legend>Connexion à l 'espace d'administration</legend>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-3">
			  				<div class="login">
			  					<label for="Nom d'utilisateur">Nom d'utilisateur : </label>
			  					<input type="text" class="form-control" placeholder="Entrer le nom d'utilisateur" name="login" required >
			  				</div>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-3">
			  				<div class=pass>
			  					<label for="Mot de passe"> Mot de passe : </label>
			  					<input type="password" class="form-control" placeholder="Entrer le mot de passe" name="password" required>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="row">
			  			<div class="col-md-12">
			  				<div class=logbutton>
			  					<button class="btn btn-primary btn-sm "input type="submit"><span class="glyphicon glyphicon glyphicon-ok-sign"></span>Envoyer</button>
			  				</div>
			  			</div>
			  		</div>
				</form>
			</div>
		</div>
	</div>
</div>


<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

