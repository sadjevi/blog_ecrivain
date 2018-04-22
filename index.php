<?php
//Connexion bdd
//récupération des données

try
{
	$bdd = new PDO('mysql:host=localhost:8889;dbname=P3;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->query('SELECT titre, billet, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation');
				
require ('affichageAccueil.php');

?>


