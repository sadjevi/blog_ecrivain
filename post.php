<?php

require('model.php');


if (isset($_GET['id']) && $_GET['id'] > 0)
{
	$post = getpost($_GET['id']);
	$comments = getcomments($_GET['id']);

	require('postView.php');
}
else 
{
    echo 'Erreur : aucun identifiant de billet envoyé';
}

