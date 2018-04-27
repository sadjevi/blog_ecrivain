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
		require ('view/frontend/postsListView.php');

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

		require('view/frontend/postView.php');
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
		$affectedlines  = $commentManager->addComment($postid, $author, $content);

		if ($affectedlines === false)
		{
			die('impossible d ajouter votre commentaire');
		}
		else

		{
			header('location: index.php?action=post&id=' . $postid);
		}
	}	
}
