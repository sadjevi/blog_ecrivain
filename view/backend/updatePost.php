<?php $title = 'ajout d un nouveau billet'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->		

<? require_once('session_verif.php') ?>






<p><a href="index.php?action=adminListPosts">Retour à la liste des billets</a></p>


<p> modification du billet</p>

	<div class="billets">
		<div class="btitle">
				<h3>
				Chapter <?= htmlspecialchars($post['id']); ?><br/>
				<?= htmlspecialchars($post['title']); ?><br/><em> le <?= $post['creation_date_fr']; ?></em>
				</h3>
		</div>
		<div class="posts">
				<p>
				<?= htmlspecialchars($post['post']); ?><br/>
				</p>
		</div>
	</div> 




	<div class="upform">	

		<form action="index.php?action=save" method="post">

			<div class="formtitle">
			   	<legend>editer un  billet</legend> 
			</div>
		   
		   <input type="hidden" name="datas[id]" value= "<?= $post['id']; ?>"/>

	   		<input type="text" name="datas[title]" id="title" value= "<?= $post['title']; ?>"/><br/>

	   		<label for="post"> votre contenu </label><br /><br/>
	       
	       	<textarea class="tinymce" name="datas[post]" id="post" rows="10" cols="50">
	       		<?= $post['post'];?>
	       	</textarea><br/><br/>
	       	

	       	<input type="submit" value="<?= $button; ?>" /> 

	    </form>
	</div>







<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('view/frontend/template.php'); ?>  <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->


