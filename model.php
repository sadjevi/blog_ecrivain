<?php

function getposts()

{
	$db = dbConnect();
	$req = $db->query('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date  DESC');

	return $req;

}


function getpost($postid)

{
	
	$db = dbConnect();
	$req = $db->prepare('SELECT id, title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
	$req->execute(array($postid));
	$post = $req->fetch();

	return $post;

	
}


function getcomments($postid)

{
	$db = dbConnect();
	$comments = $db->prepare('SELECT id, content, DATE_FORMAT(created_date, \'%d/%m/%Y à %Hh%imin%ss\') AS created_date_fr FROM comments WHERE post_id = ? ORDER BY created_date DESC');
	$comments->execute(array($postid));

	return $comments;



}

function dbConnect()
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

?>

