<?php

require_once ('model/PostManager.php');
require_once ('model/CommentManager.php');
require_once ('model/AdminManager.php');
require_once ('model/BddManager.php');


class BackController
{
	/**
	*
	* method to retrieve administrator informations in order to  login
	*/
	public function getlogIn()
	{
		$adminManager = new AdminManager();
		$log 		  = $adminManager->getLogin();

		require_once('view/frontend/authView.php');
	}
	
	/**
	*
	* logout admin, delete $_SESSION informations and redirect to home
	*/
	public function getLogOut()
	{
		// détruit toute les variables de la session
		session_unset();
		header('location: index.php');
	}

	/**
	*
	* method to connnect to admin home page
	*/
	public function log_pass()
	{
		
		$adminManager = new AdminManager();
		$log          = $adminManager->getlogin();
		$pass         = password_verify($_POST['password'], $log['password']);

		if ($pass === false)
		{
			//die('erreur de login ou de mot de passe');
			$messageError = "erreur de login et/ou de mot de passe";
			require ('view/frontend/connect_errorView.php');
		}
		else
		{
			if($pass && $_POST['login'] == $log['login']) 
			{
				$_SESSION['auth']     = true;
        		$_SESSION['id']       = $log['id'];
        		$_SESSION['login']    = $log['login'];
        		$_SESSION['password'] = $log['password'];
			} 
			else
			{
				$messageError         = "erreur de login et/ou de mot de passe";
				require ('view/frontend/connect_errorView.php');
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
		
		$postManager    = new PostManager();
		$commentManager = new CommentManager();

		$cNbr           = $commentManager->getRepComNb();
		$sheetnbr       = $postManager->getSheetNbr();
		$posts          = $postManager->getPosts();		

		
		require_once('view/backend/adminView.php');

	}
	/**
	*
	* show a specific post and retrieve signaled comments
	*@params $id 
	*/
	public function adminPostRep($id)
	{
		$postManager    = new PostManager();
		$commentManager = new CommentManager();

		$post           = $postManager->getPost($id);
		$rComment       = $commentManager->getReportedComment($id);

		require_once('view/backend/adminEntirePostView.php');
	}

	/**
	*
	* show a specific post and retrive comments
	*@params $id 
	*/
	public function adminPost($id)
	{
		$postManager    = new PostManager();
		$commentManager = new CommentManager();

		$post           = $postManager->getPost($id);
		$comments       = $commentManager->getComments($id);

		require_once('view/backend/adminPostView.php');
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
		
		require_once('view/backend/deletePost.php');
	}

	/**
	* method to retrieve  3 lasts posts
	* 
	*/
	public function listLastPosts()
	{
		$postManager    = new PostManager();
		$lastPosts      = $postManager->getLastPosts();
		$button 	    = ' enregistrer ';
		$datas['id']    = null;
		$datas['title'] = null;
		$datas['post']  = null;

		require_once('view/backend/create.php');
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
			//die('impossible d ajouter votre nouveau billet');
			$messageError = "impossiple d ajouter le nouveau billet";
			require ('view/frontend/connect_errorView.php');
		}
		else
		{
			header('location: index.php?action=adminListPosts');
		}
	}

	/**
	*
	* method to show a post in order to modify it
	*@params $id
	*/
	public function toupdtPost($id) // edit
	{
		
		$postManager    = new PostManager();
		$post           = $postManager->getPost($id);
		$button         = ' modifier ';

		require_once('view/backend/updatePost.php');
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
			//die('impossible d ajouter votre nouveau billet');
			$messageError = "le billet n'a pu être modifié";
			require ('view/frontend/connect_errorView.php');
		}
		else
		{
			header('location: index.php?action=adminListPosts');
		}

	}

	/**
	*
	* method to approve comment when signaled by visitors 
	*@params $id
	*/

	public function approveCom($id)
	{
		$commentManager = new CommentManager();
		$affectedLines  = $commentManager->approveComment($id);

		if ($affectedLines === false)
		{
			//die('impossible d ajouter votre nouveau billet');
			$messageError = "le commentaire n'a pu être approuvé";
			require ('view/frontend/connect_errorView.php');
		}
		else
		{
			header('location: index.php?action=getRepComs');
		}

	}

	/**
	*
	* method to retieve all reported comments 
	*
	*/

	public function getRepComs()
	{
		$postManager    = new PostManager();
		$commentManager = new CommentManager();

		$rComments      = $commentManager->getReportedComments();

		require_once('view/backend/reportedComsView.php');

	}

	/**
	*
	* method to delete specific comment
	*@params $id
	*/
	public function deleteComment($id)
	{
		$commentManager   = new CommentManager();
		$commentManager->delComment($id);
	
		header('location: index.php?action=getRepComs');
		
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
	
		header('location: index.php?action=adminListPosts');
		
	}

	/**
	*
	* method to save entries in order to creation or modification 
	*@params $datas
	*/
	public function save($datas)
	{
		$PostManager = new PostManager;
		$datas		 = $PostManager->retrieve($datas);

		if ($affectedLines === false)
		{
			
			$messageError = "le billet n'a pu être enregistré";
			require ('view/frontend/connect_errorView.php');
		}
		else
		{
			header('location: index.php?action=adminListPosts');
		}

	}
}

