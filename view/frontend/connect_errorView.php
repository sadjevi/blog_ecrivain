<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->


</header>

<div class="empty"></div>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<a class="btn btn-info" href="index.php"><span class="glyphicon glyphicon glyphicon-arrow-left"></span>Retour aux chapitres </a>
		</div>
	</div>
	<div class="error">
		<div class="row">
			<div class="col-md-10 col-lg-offset-1">
				<?php if($messageError) :?>
 					<?php echo $messageError;?>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>


<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

