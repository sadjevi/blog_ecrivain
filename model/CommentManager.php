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


		public function getReportedComment($postid)
		/**
		*
		* method to retrieve all comments for a specific post 
		*@params $post_id 
		*/
		{
			$db       = $this->dbConnect();
			$rComment = $db->prepare('SELECT id, author, content, DATE_FORMAT(created_date, \'%d/%m/%Y à %Hh%imin%ss\') AS created_date_fr FROM comments WHERE post_id = ? AND reported = 1 ORDER BY created_date DESC');
			$rComment->execute(array($postid));

			return $rComment;
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

		public function reportComment($id)
		{
			$db            = $this->dbConnect();
			$reportComment   = $db->prepare('UPDATE comments SET reported = 1 WHERE id = ?');
			$affectedLines = $reportComment->execute(array($id));

			return $affectedLines;
		}


		public function approveComment($id)
		{
			$db            = $this->dbConnect();
			$reportComment   = $db->prepare('UPDATE comments SET reported = 0 WHERE id = ?');
			$affectedLines = $reportComment->execute(array($id));

			return $affectedLines;
		}

		public function getReportedComments()
		{
			$db       = $this->dbConnect();
			$rComments = $db->query('SELECT id, post_id, author, content, DATE_FORMAT(created_date, \'%d/%m/%Y à %Hh%imin%ss\') AS created_date_fr FROM comments WHERE reported = 1 ORDER BY created_date DESC');

			return $rComments;
		}

		public function delComment($id)
		{
			$db            = $this->dbConnect();
			$erasedComment    = $db->prepare('DELETE from comments WHERE id = ?');
			$affectedLines = $erasedComment->execute(array($id));

			return $affectedLines;
		}

		public function getRepComNb()
		{
			$db   = $this->dbConnect();
			$retour = $db->query('SELECT COUNT(*) AS coms_nb FROM comments WHERE reported = 1');
			$donnees = $retour->fetch();
			$cNbr = $donnees['coms_nb'];

			return $cNbr;
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
		        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		        return $db;
		    }
		    catch(Exception $e)
		    {
		        die('Erreur : '.$e->getMessage());
		    }
		}
}

