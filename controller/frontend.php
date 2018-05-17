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
	* method to retrieve admin informations
	*/
	public function getlogin()
	{
		$adminManager = new AdminManager();
		$log = $adminManager->getlogin();

		require_once('view/frontend/authView.php');
	}

	/**
	*
	* method to connnect to admin page
	*/
	public function log_pass()
	{
		
		$adminManager = new AdminManager();
		$log    = $adminManager->getlogin();

		$pass = password_verify($_POST['password'], $log['password']);

		if ($pass === false)
		{
			die('erreur de login ou de mot de passe');
		}
		else
		{
			if($pass && $_POST['login'] == $log['login']) 
			{
				$_SESSION['auth'] = true;
		        	$_SESSION['id'] = $log['id'];
		        	$_SESSION['login'] = $log['login'];
		        	$_SESSION['password'] = $log['password'];
			}
			else
			{
				echo 'erreur de login ou de mot de passe';
			}
			
		}
		
		
		header('location: index.php?action=adminListPosts');
	}
	/**
	*
	* method to retrieve all posts with admin features
	*/
	public function adminListPosts()
	{
		
		$postManager = new PostManager();
		$sheetnbr    = $postManager->getSheetNbr();
		$posts       = $postManager->getPosts();		

		
		require_once('view/frontend/adminView.php');

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
	* show a specific post in order to delete it
	*@params $id 
	*/
	public function todltPost($id)
	{	
		$postManager    = new PostManager();
		$post           = $postManager->getPost($id);
		
		require_once('view/frontend/deletePost.php');
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
	* method to retrieve lasts posts
	* 
	*/
	public function listLastPosts()
	{
		$postManager = new PostManager();
		$lastPosts   = $postManager->getLastPosts();

		require_once('view/frontend/create.php');
	}

	/**
	*
	* method to create a new post
	*@params $title,$post 
	*/
	public function createPost($title, $post)
	{
		$postManager   = new PostManager();
		$affectedLines = $postManager->addPost($title, $post);

		if ($affectedLines === false)
		{
			die('impossible d ajouter votre nouveau billet');
		}
		else

		{
			header('location: index.php?');
		}
	}

	/**
	*
	* method to show a post in order to delete it
	*@params $id
	*/
	public function toupdtPost($id) // edit
	{
		
		$postManager    = new PostManager();
		$post           = $postManager->getPost($id);

		require_once('view/frontend/updatePost.php');
	}

	/**
	*
	* method to update a post
	*@params $id, $title, $post
	*/
	public function updatePost($id, $title, $post) // update
	{
		$postManager   = new PostManager();
		$affectedLines = $postManager->adjustPost($id,$title, $post);

		if ($affectedLines === false)
		{
			die('impossible d ajouter votre nouveau billet');
		}
		else

		{
			header('location: index.php?');
		}

	}

	/**
	*
	* method to delete specific post
	*@params $id
	*/
	public function deletePost($id)
	{
		$postManager   = new PostManager();
		$postManager->delPost($id);
	
		header('location: index.php?');
		
	}

}
