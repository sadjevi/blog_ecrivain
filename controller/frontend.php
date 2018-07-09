<?php
require_once ('model/PostManager.php');
require_once ('model/CommentManager.php');
require_once ('model/AdminManager.php');
require_once ('model/BddManager.php');

/**
* frontend controller
*
*/
class Frontend
{	
	
	/**
	*
	* method to redirect user to an error page
	*/
	public function getErrorView($message = null)
	{
		$messageError = $message;
		require ('view/frontend/connect_errorView.php');
	}


	/**
	*
	* method to return to home page
	*/
	public function accueil()
	{
		$postManager = new PostManager();
		$sheetnbr    = $postManager->getSheetNbr();
		$posts       = $postManager->getPosts();
		require ('view/frontend/postsListView.php');
	}

	/**
	*
	* method to display a selection of alaska pics
	*/
	public function selection()
	{
		require ('view/frontend/selection.php');
	}

	/**
	*
	* method to display legals mentions
	*/
	public function ml()
	{
		require ('view/frontend/mentions_legales.php');
	}

	/**
	*
	* method to show jean Forteroche bio
	*/
	public function jf()
	{
		require ('view/frontend/jean_forteroche.php');
	}

	/**
	*
	* method to retrieve entire post
	*/
	public function getEntirePost($id)
	{
		$postManager    = new PostManager();
		$post           = $postManager->getPost($id);

		require ('view/frontend/entirePostView.php');
	}

	/**
	* method to retrieve all posts
	* 
	*/
	public function listPosts()
	{
		//$posts = getposts();	
		$postManager = new PostManager();
		$sheetnbr    = $postManager->getSheetNbr();
		$posts       = $postManager->getPosts();		
		require_once  ('view/frontend/postsListView.php');

	}

	/**
	*
	* show a specific post and retrive comments
	*@params $id 
	*/
	public function post($id)
	{
		$postManager    = new PostManager();
		$commentManager = new CommentManager();

		$post           = $postManager->getPost($id);
		$comments       = $commentManager->getComments($id);

		if($comments === false)
		{
			echo'aucun comentaires à afficher';
		}


		require_once('view/frontend/postView.php');
	}

	
	/**
	*
	* method to add a new comment in a specific post
	*@params $post_id, $author & $content 
	*/
	public function postComment($postid, $author, $content)
	{
		$commentManager = new CommentManager();
		$affectedLines  = $commentManager->addComment($postid, $author, $content);

		if ($affectedLines === false)
		{
			//die('impossible d ajouter votre commentaire');
			$messageError = "impossible d ajouter votre commentaire";
			require ('view/frontend/connect_errorView.php');

		}
		else

		{
			header('location: index.php?action=post&id=' . $postid);
		}
	}

	

	
	/**
	*
	* method to report a comment from a specific post
	*@params $id,  
	*/
	public function reportCom($id)
	{
		$commentManager = new CommentManager();
		$affectedLines  = $commentManager->reportComment($id);

		if ($affectedLines === false)
		{
			//die('impossible d ajouter votre nouveau billet');
			$messageError = "impossible de faire remonter le commentaire";
			require ('view/frontend/connect_errorView.php');
		}
		else
		{
			require_once('view/frontend/reported_confirmView.php');
		}

	}

	



}
