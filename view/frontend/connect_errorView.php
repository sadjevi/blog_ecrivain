<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->


<?php if($messageError) :?>
  <?php echo $messageError;?>
<?php endif;?>

<p><a href="index.php">Retour à la liste des billets</a></p>


<p>Vous n'etes pas autorisé à acceder à cette page: veullez contacter l'administrateur</p>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

