<?php

function getposts()

{
	try
	{
		$db = new PDO('mysql:host=localhost:8889;dbname=P3;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}

$req = $db->query('SELECT title, post, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date  DESC');

return $req;

}

?>

