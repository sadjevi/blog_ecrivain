<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->
<nav>
					
					<p><a href="index.php?action=accueil">Accueil</a></p>
					<p><a href="index.php?action=jf">Jean FORTEROCHE</a></p>
					<p><a href="index.php?action=selection">Selection</a></p>
					<p><a href="index.php?action=ml">Mentions légales</a></p>

				</nav>
			</header>


<p><a href="index.php">Retour à la liste des billets</a></p>


<p>le commentaire à bien été signalé à l'administrateur</p>



<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

