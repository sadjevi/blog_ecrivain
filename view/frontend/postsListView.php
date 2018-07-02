<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->
	

<div class="container-fluid">
	<nav class="row">
		<div class="col-md-3"><a href="index.php?action=accueil">Accueil</a></div>
		<div class="col-md-3"><a href="index.php?action=jf">Jean FORTEROCHE</a></div>
		<div class="col-md-3"><a href="index.php?action=selection">Selection</a></div>
		<div class="col-md-3"><a href="index.php?action=ml">Mentions légales</a></div>
	</nav>
</div>
			
</header>

<div class="start">

	<h2>Carnet de voyages</h2>
	<p>
	vous retrouverez ici mes différents posts òu je fais part de mon séjour,<br/> 
	j'essayerais d'en mettre un petit peu tout les jours<br/>
	surtout n'oubliez pas d'aller faire un tour sur les réseaux <br/>
	j'y suis aussi......;)
	</p>

</div>


<!--<em><a href="index.php?action=listLastPosts">ajouter</a></em>-->


		


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

<div class="pagination">
	<?php

	if(isset($_GET['sheet']) && $_GET['sheet'] > 0) 
			{
		 		$currentsheet = $_GET['sheet'];
		     	if($currentsheet > $sheetnbr) 
			    {
			          $currentsheet = $sheetnbr;
			    }
			}
			else 
			{
			     $currentsheet = 1;    
			}

	echo 'page : ';

	for ($sheet = 1 ; $sheet <= $sheetnbr ; $sheet++)
	{
		
		(isset($_GET['sheet'])) ? $page = $_GET['sheet'] : $page = 1; 

		if(isset($_GET['sheet'])) {
			$page = $_GET['sheet'] ;
		} else {
			$page = 1;
		};

		if($sheet == $currentsheet)
		{
			echo '[ ' . $page . '] ';
		}
		
		else
		{
		   echo '<a href="index.php?sheet=' . $sheet . '">' . $sheet . '</a> ';
		}
		
	}

	?>
</div>
		
       

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

		
