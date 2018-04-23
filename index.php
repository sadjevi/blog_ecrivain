<?php

require('controller.php'); //loading 'controller.php' file to store functions in memory


if(isset($_GET['action'])) // test of 'action' parameter,to know which one of controllers have to be called
{
	if($_GET['action'] == 'listposts')  // 'listposts' controller is called
	{
		listposts(); // so execution of function 'listposts'
	}

	elseif($_GET['action'] =='post') //'post' controller is called 
	{
		if(isset($_GET['id']) && $_GET['id'] > 0) // test of parametters 
		{
			post(); // if everything is ok --> execution of function 'post'
		}
		else 
		{
			echo 'Erreur: aucun identifiant de billet envoyé'; // otherwise erroe message shown
		}
	}

}
else
{
	listposts(); // if 'action' parameter isn't found ---> loading of posts list
}

?>


