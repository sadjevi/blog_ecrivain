<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->
				
</header>
<? $banniere = true ; ?>

<div class="start">

	<h2>Carnet de voyages</h2>
	<p>
	vous retrouverez ici mes différents posts òu je fais part de mon séjour,<br/> 
	j'essayerais d'en mettre un petit peu tout les jours<br/>
	surtout n'oubliez pas d'aller faire un tour sur les réseaux <br/>
	j'y suis aussi......;)
	</p>

</div>

<div class="container">
	<?php while ($data = $posts->fetch()): ?>
		<div class="chaps">
			<div class="row">
				<div class="billetscont">
					<div class="col-md-6 col-lg-offset-3">
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
									<p>
									<?= htmlspecialchars(substr($data['post'], 1, 300)); ?> ... <br/>
									<div class="suitebutton">
										<a class="btn btn-primary" href="index.php?action=getEntirePost&amp;id=<?= $data['id']; ?>">lire la suite <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
									</div>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile;?>
</div>
 





<?php while ($data = $posts->fetch()): ?>






		<div class="billets">
		<div class="btitle">
			<h3>
			Chapter <?= htmlspecialchars($data['id']); ?><br/>
			<?= htmlspecialchars($data['title']); ?><br/><em> le <?= $data['creation_date_fr']; ?></em>
			</h3>
		</div>
		<div class="posts">
			<p>
			<?= htmlspecialchars(substr($data['post'], 1, 300)); ?> ... <br/>
			<div class="suitebutton">
				<em><a href="index.php?action=getEntirePost&amp;id=<?= $data['id']; ?>"><input type="button" name="Lire la suite"value="Lire la suite"></a></em><br/>
			</div>
			<div class="combutton">
				<em><a href="index.php?action=post&amp;id=<?= $data['id']; ?>"><input type="button" name="Commentaires"value="Commentaires"></a></em><br/>
			</div>
			</p>
		</div>
		<!--<p><a href="index.php?action=toupdtPost&amp;id=<?= $data['id']; ?>">modifier</a></em></p>
		<p><a href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>">supprimer</a></em></p>-->
		
	</div>

<?php endwhile; ?>

<!--- passer la pagination dans un include --->	
<? require('view/frontend/pagination.php'); ?>
		
      
<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

		
