<?php

class CommentManager
{
		public function getComments($postid)
		/**
		*
		* method to retrieve all comments for a specific post 
		*@params $post_id 
		*/
		{
			$db       = $this->dbConnect();
			$comments = $db->prepare('SELECT id, author, content, DATE_FORMAT(created_date, \'%d/%m/%Y à %Hh%imin%ss\') AS created_date_fr FROM comments WHERE post_id = ? ORDER BY created_date DESC');
			$comments->execute(array($postid));

			return $comments;
		}


		public function addComment($postid, $author, $content)
		/**
		*
		* method to add new comment in a specific post post
		*@params $post_id, $author & $content 
		*/

		{
			$db            = $this->dbConnect();
			$comment       = $db->prepare('INSERT INTO comments(post_id, author, content, created_date) VALUES (?, ?, ?, NOW())');
			$affectedLines = $comment->execute(array($postid, $author, $content));

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

