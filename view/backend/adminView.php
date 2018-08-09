<? require_once('session_verif.php') ?>


<?php $title = 'le blog de l ecrivain'; ?> <!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->


<div class="start">

	<h2>Carnet de voyages</h2>
	<p>
	vous retrouverez ici mes différents posts òu je fais part de mon séjour,<br/> 
	j'essayerais d'en mettre un petit peu tout les jours<br/>
	surtout n'oubliez pas d'aller faire un tour sur les réseaux <br/>
	j'y suis aussi......;)
	</p>

</div>

<div class="admininfos">
	<p>Bonjour <?= $_SESSION['login'];?><br/>

	 <?php

	  if($cNbr >= 1)
	  {
	  	echo '<em><a href="index.php?action=getRepComs">vous avez ' . $cNbr . ' messages à moderer </a></em><br/>' ;
	  }
	  else
	  {
	  	echo 'vous n avez aucun message à moderer <br/>';
	  } 

	 
	 ?>
	</p>

	<div class="addbutton">
<<<<<<< HEAD
		<em><a class="btn btn-default" href="index.php?action=listLastPosts" style="background-color: #211f1f96" "color: white"><span class="glyphicon glyphicon glyphicon-plus"></span> Création d'un nouveau billet </a><em>
=======
		<p>
		<em><a href="index.php?action=listLastPosts"><input type="button" name="Création d'un nouvel article"value="Création d'un nouvel article"></a></em><br/>
		</p>

>>>>>>> parent of ce2b364... backend bootstrapping
	</div>
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
									<?= substr($data['post'], 0, 300); ?> ... <br/>
									<div class="suitebutton">
										<a class="btn btn-primary" href="index.php?action=adminPost&amp;id=<?= $data['id']; ?>">lire la suite <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
									</div>
									<div class="updtbutton">
										<a class="btn btn-dark" href="index.php?action=toupdtPost&amp;id=<?= $data['id']; ?>"> Modifier <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
									</div>
									<div class="delbutton">
										<a class="btn btn-danger" href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>"> Supprimer <span class="glyphicon glyphicon glyphicon-hand-right"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<<<<<<< HEAD
			<div class="row">
				<div class="buttons">
					<div class="updtbutton">
						<div class="col-sm-3"><a class="btn btn-info" href="index.php?action=toupdtPost&amp;id=<?= $data['id']; ?>"> Modifier <span class="glyphicon glyphicon glyphicon-pencil"></span></a>
						</div>
					</div>
						<div class="delbutton">
							<div class="col-sm-offset-6 col-sm-3"><a class="btn btn-danger" href="index.php?action=todltPost&amp;id=<?= $data['id']; ?>"> Supprimer <span class="glyphicon glyphicon glyphicon-remove"></span></a>
						</div>
					</div>
				</div>
			</div>
=======
>>>>>>> parent of ce2b364... backend bootstrapping
		</div>
	<?php endwhile;?>
</div>

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
		   echo '<a href="index.php?action=adminListPosts&amp;sheet=' . $sheet . '">' . $sheet . '</a> ';
		}
		
	}

	?>
</div>


<<<<<<< HEAD
=======
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
	   echo '<a href="index.php?action=adminListPosts&amp; sheet=' . $sheet . '">' . $sheet . '</a> ';
	}
	
}

?>
		
       
>>>>>>> parent of ce2b364... backend bootstrapping

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->

		
