<?php


class PostManager
{

	public function getPosts()
	/**
	* method to retrieve all posts
	* 
	*/
	{
		$db  = $this->dbConnect();
		$req = $db->query('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date  DESC');

		return $req;

	}


	public function getPost($postid)
	/**
	*
	* show a specific post 
	*@params $id 
	*/
	{
		
		$db   = $this->dbConnect();
		$req  = $db->prepare('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postid));
		$post = $req->fetch();

		return $post;
		
	}

	public function addPost($title, $post)
		/**
		*
		* method to add new postt 
		*@params  $title & $post 
		*/

		{
			$db            = $this->dbConnect();
			$newpost       = $db->prepare('INSERT INTO posts(title, post, creation_date) VALUES (?, ?, NOW())');
			$affectedLines = $newpost->execute(array($title, $post));

			return $affectedLines;
		}

	public function updatePost($id, $title, $post)
		/**
		*
		* method to update post
		*@params $id, $title & $cpost 
		*/

		{
			$db            = $this->dbConnect();
			$updatedPost   = $db->prepare('UPDATE posts SET id = ?, title = ?, post = ?');
			$affectedLines = $updatedPost->execute(array($id, $title, $post));

			return $affectedLines;
		}

	public function deletePost($id)
	/**
		*
		* method to delete post
		*@params $id 
		*/
	{
		$db            = $this->dbConnect();
		$erasedPost    = $db->prepare('DELETE from posts WHERE id = ?');
		$affectedLines = $erasedPost->execute(array($id));

		return $affectedLines;
	}

	

	private function dbConnect()
	/**
	*
	* method to connect database 
	*/
	{
	    try
	    {
	        $db = new PDO('mysql:host=localhost:8889;dbname=P3;charset=utf8', 'root', 'root');
	        return $db;
	    }
	    catch(Exception $e)
	    {
	        die('Erreur : '.$e->getMessage());
	    }
	}

}

