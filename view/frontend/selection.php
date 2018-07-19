<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->	

</header>

<div class="start">

	<h2>Quelques clichés</h2>
	<p>
	Une selection de photos prises durant mon séjour .....
	</p>

</div>
<div class="container">
	<div class="row">
		<div class="slpics">
			<div class="col-md-4"><img src="public/images/sel1.jpg" alt="alaska 1" /></div>
			<div class="col-md-4"><img src="public/images/sel2.jpg" alt="alaska 2" /></div>
			<div class="col-md-4"><img src="public/images/sel3.jpg" alt="alaska 3" /></div>
			<div class="col-md-4"><img src="public/images/sel4.jpg" alt="alaska 4" /></div>
			<div class="col-md-4"><img src="public/images/sel5.jpg" alt="alaska 5" /></div>
			<div class="col-md-4"><img src="public/images/sel6.jpg" alt="alaska 6" /></div>
		</div>
	</div>
</div>

			
			

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->