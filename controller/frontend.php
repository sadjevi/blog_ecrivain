<?php
require('model/frontend.php');

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
	public function listposts()
	{
		$posts = getposts();			
		require ('view/frontend/postsListView.php');
	}

	/**
	*
	* show a specific post and retrive comment
	*@params $id 
	*/
	public function post($id)
	{
		$post = getpost($id);
		$comments = getcomments($id);
		require('view/frontend/postView.php');
	}	
}
