<?php
require_once ('model/PostManager.php');
require_once ('model/CommentManager.php');

/**
* frontend controller
*
*/
class Frontend
{
	/**
	* method to retrieve all posts
	* 
	*/
	public function listPosts()
	{
		//$posts = getposts();	
		$postManager = new PostManager();
		$posts       = $postManager->getPosts();		
		require  ('view/frontend/postsListView.php');

	}

	/**
	*
	* show a specific post and retrive comments
	*@params $id 
	*/
	public function post($id)
	{
		//$post = getpost($id);
		//$comments = getcomments($id);
		$postManager    = new PostManager();
		$commentManager = new CommentManager();

		$post           = $postManager->getPost($id);
		$comments       = $commentManager->getComments($id);

		require_once('view/frontend/postView.php');
	}

	public function npost($id)
	{
		//$post = getpost($id);
		//$comments = getcomments($id);
		$postManager    = new PostManager();
		$post           = $postManager->getPost($id);
		

		require_once('view/frontend/deletePost.php');
	}

	/**
	*
	* method to add a new comment in the post
	*@params $post_id, $author & $content 
	*/

	public function postComment($postid, $author, $content)
	{
		//$affectedlines = addcomment($postid, $author, $content);
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
	* method to write a new post
	*@params $title,$post 
	*/

	public function newPost($title, $post)
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
	* method to write a new post
	*@params $title,$post 
	*/

	public function adjustPost($id, $title, $post)
	{
		$postManager   = new PostManager();
		$post          = $postManager->getPost($id);
		$affectedLines = $postManager->updatePost($title, $post);

		if ($affectedLines === false)
		{
			die('impossible d ajouter votre nouveau billet');
		}
		else

		{
			header('location: index.php?');
		}
	}
	public function delPost($id)
	{
		$postManager   = new PostManager();
		$post          = $postManager->getPost($id);
		$affectedLines = $postManager->updatePost($id);
	

		if ($affectedLines === false)
		{
			die('impossible d ajouter votre nouveau billet');
		}
		else

		{
			header('location: index.php?');
		}
	}

}
