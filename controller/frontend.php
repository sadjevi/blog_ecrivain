<?php

require('model/frontend.php');

function listposts() //retrieve all posts

{
	$posts = getposts();			
	require ('view/frontend/postsListView.php');
}

function post()  // show a specific post and retrieve comments
{
	$post = getpost($_GET['id']);
	$comments = getcomments($_GET['id']);
	require('view/frontend/postView.php');
}
?>