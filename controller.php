<?php

require('model.php');

function listposts() //retrieve all posts

{
	$posts = getposts();			
	require ('postsListView.php');
}

function post()  // show a specific post and retrieve comments
{
	$post = getpost($_GET['id']);
	$comments = getcomments($_GET['id']);
	require('postView.php');
}
?>