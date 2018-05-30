<?php

session_start();

if(!isset($_SESSION['auth']) || !$_SESSION['auth'])
{
	header('location: view/frontend/connect_errorView.php');
}
?>