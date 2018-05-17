<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->






<form action="index.php?action=log_pass" method="post">
   <h1>Connexion</h1>

   <label><b>Nom d'utilisateur</b></label>
   <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required><br/>

   <label><b>Mot de passe</b></label>
   <input type="password" placeholder="Entrer le mot de passe" name="password" required><br/>

   <input type="submit" id='submit' value='envoyer' >

</form>




<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

