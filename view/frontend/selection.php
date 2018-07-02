<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->	
<nav>
					
					<p><a href="index.php?action=accueil">Accueil</a></p>
					<p><a href="index.php?action=jf">Jean FORTEROCHE</a></p>
					<p><a href="index.php?action=selection">Selection</a></p>
					<p><a href="index.php?action=ml">Mentions légales</a></p>

				</nav>
			</header>
<div class="slpics">
	
	<div class="firstrow">
		<p><img src="public/images/sel1.jpg" alt="Jean Forteroche" /></p>
		<p><img src="public/images/sel2.jpg" alt="Jean Forteroche" /></p>
		<p><img src="public/images/sel3.jpg" alt="Jean Forteroche" /></p>
	</div>

	<div class="secndrow">
		<p><img src="public/images/sel4.jpg" alt="Jean Forteroche" /></p>
		<p><img src="public/images/sel5.jpg" alt="Jean Forteroche" /></p>
		<p><img src="public/images/sel6.jpg" alt="Jean Forteroche" /></p>
	</div>

</div>

			
			

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->