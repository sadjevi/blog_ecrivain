<?php
require_once ('model/PostManager.php');
require_once ('model/CommentManager.php');
require_once ('model/AdminManager.php');

/**
* frontend controller
*
*/
class Frontend
{	
	
	/**
	*
	* method to redirect user to error page when admin informations are not set
	*/
	public function getErrorView($message = null)
	{
		$messageError = $message;
		require ('view/frontend/connect_errorView.php');
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
			die('impossible d ajouter votre commentaire');
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
		$affectedLines = $commentManager->reportComment($id);

		if ($affectedLines === false)
		{
			die('impossible d ajouter votre nouveau billet');
		}
		else
		{
			require_once('view/frontend/reported_confirmView.php');
		}

	}

	



}
