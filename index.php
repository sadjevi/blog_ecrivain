<?php

require('controller/frontend.php'); //loading 'controller.php' file to store functions in memory
$controller = new Frontend();

if(isset($_GET['action'])) // test of 'action' parameter,to know which one of controllers have to be called
{
	if($_GET['action'] == 'listposts')  // 'listposts' controller is called
	{
		$controller->listposts(); // so execution of function 'listposts'
	}

	elseif($_GET['action'] =='post') //'post' controller is called 
	{
		if(isset($_GET['id']) && $_GET['id'] > 0) // test of parametters 
		{
			$controller->post($_GET['id']); // if everything is ok --> execution of function 'post'
		}
		else 
		{
			echo 'Erreur: aucun identifiant de billet envoyé'; // otherwise erroe message shown
		}
	}

}
else
{
	$controller->listposts(); // if 'action' parameter isn't found ---> loading of posts list
}

?>


