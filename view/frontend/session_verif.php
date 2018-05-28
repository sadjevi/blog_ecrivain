<?php

session_start();

if(!isset($_SESSION['auth']) || !$_SESSION['auth'])
{
	echo 'Vous n etes pas autorisé à accéder à cette page, veuillez contacter l administrateur';
}

