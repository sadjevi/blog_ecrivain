<?php


class PostManager


{	/**
	* method to calculate number of sheets
	* 
	*/
	public function getSheetNbr()
	{
		$db   = $this->dbConnect();
		$retour = $db->query('SELECT COUNT(*) AS posts_nb FROM posts');
		$donnees = $retour->fetch();
		$nbr = $donnees['posts_nb'];
		$postspersheet = 5;
		$sheetnbr  = ceil($nbr / $postspersheet);

		return $sheetnbr;
	}

	/**
	* method to retrieve last posts
	* 
	*/
	public function getLastPosts()
	{
		$db  = $this->dbConnect();
		$lastPosts = $db->query('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date  DESC LIMIT 0, 3');

		return $lastPosts;
	}

	/**
	* method to retrieve all posts
	* 
	*/
	public function getPosts()
	{
		$db   = $this->dbConnect();
		$retour = $db->query('SELECT COUNT(*) AS posts_nb FROM posts');
		$donnees = $retour->fetch();
		$nbr = $donnees['posts_nb'];
		$postspersheet = 5;
		$sheetnbr  = ceil($nbr / $postspersheet);

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
	 
		$firstpost=($currentsheet-1)*$postspersheet;
		$posts = $db->query('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date  DESC LIMIT ' . $firstpost .',' . $postspersheet .' ');
		
		return $posts;
	}

	/**
	*
	* show a specific post 
	*@params $id 
	*/
	public function getPost($postid)
	{
		$db   = $this->dbConnect();
		$req  = $db->prepare('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postid));
		$post = $req->fetch();

		return $post;	
	}

	/**
	*
	* method to add new postt 
	*@params  $title & $post 
	*/
	public function addPost($title, $post)	
	{
		$db            = $this->dbConnect();
		$newpost       = $db->prepare('INSERT INTO posts(title, post, creation_date) VALUES (?, ?, NOW())');
		$affectedLines = $newpost->execute(array($title, $post));

		return $affectedLines;
	}

	/**
	*
	* method to update post
	*@params $id, $title & $post 
	*/
	public function adjustPost($id, $title, $post)
	{
		$db            = $this->dbConnect();
		$updatedPost   = $db->prepare('UPDATE posts SET title = ?, post = ? WHERE id = ?');
		$affectedLines = $updatedPost->execute(array($title, $post, $id));

		return $affectedLines;
	}

	/**
	*
	* method to delete post
	*@params $id 
	*/
	public function delPost($id)
	{
		$db            = $this->dbConnect();
		$erasedPost    = $db->prepare('DELETE from posts WHERE id = ?');
		$affectedLines = $erasedPost->execute(array($id));

		return $affectedLines;
	}
	
	/**
	*
	* method to connect database 
	*/
	private function dbConnect()
	
	{
	    try
	    {
	        $db = new PDO('mysql:host=localhost:8889;dbname=P3;charset=utf8', 'root', 'root');
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        return $db;
	    }
	    catch(Exception $e)
	    {
	        die('Erreur : '.$e->getMessage());
	    }
	}

}

