<?php

require('controller/frontend.php'); //loading 'controller.php' file to store functions in memory
$controller = new Frontend();


if(isset($_GET['action'])) // test of 'action' parameter,to know which one of controllers have to be called
{
	if($_GET['action'] == 'listposts')  // 'listposts' controller is called
	{	
		$controller->listPosts(); // so execution of function 'listposts'
	}

	if($_GET['action'] == 'adminListPosts')  // 'listposts' controller is called
	{	
		
		$controller->adminListPosts(); // so execution of function 'listposts'
	}

	if($_GET['action'] == 'log_pass')  // 'listposts' controller is called
	{	
		
		$controller->log_pass(); // so execution of function 'listposts'
	}

	if($_GET['action'] == 'getlogin')  // 'listposts' controller is called
	{	
		
		$controller->getlogin(); // so execution of function 'listposts'
	}

	elseif($_GET['action'] =='post') //'post' controller is called 
	{
		if(isset($_GET['id']) && $_GET['id'] > 0) // test of parametters 
		{
			$controller->post($_GET['id']); // if everything is ok --> execution of function 'post'
		}
		else 
		{
			echo 'Erreur: aucun identifiant de billet envoyé'; 
		}
	}
	
	elseif($_GET['action'] == 'postComment')
	{
		if(isset($_GET['id']) && $_GET['id'] > 0)
		{
			if(!empty ($_POST['author']) && !empty ($_POST['content']))
			{
				$controller->postComment($_GET['id'], $_POST['author'], $_POST['content']);
			}
			else 
			{
				echo 'Erreur: le commentaire n a pu être ajouté, tous les champs ne sont pas remplis !';
			}
		}		
		else
		{
			echo 'Erreur: aucun identifiant de billet  envoyé';
		}
	}

	elseif($_GET['action'] == 'listLastPosts') 
	{
		$controller->listLastPosts();
	}


	elseif($_GET['action'] == 'createPost')
	{

		if(!empty ($_POST['title']) && !empty ($_POST['post']))
		{
			$controller->createPost($_POST['title'], $_POST['post']);
		}
		else
		{
			echo 'erreur le billet n a pu être enregistré';
		}
	
	}
	elseif($_GET['action'] =='toupdtPost') 
	{
		if(isset($_GET['id']) && $_GET['id'] > 0)  
		{
			$controller->toupdtPost($_GET['id']); 
		}
		else 
		{
			echo 'Erreur: aucun identifiant de billet envoyé'; 
		}
	}
	elseif($_GET['action'] =='updatePost')
		{
			
			$controller->updatePost($_POST['id'] ,$_POST['title'], $_POST['post']);
		
		}
	elseif($_GET['action'] =='todltPost')
	{
		if(isset($_GET['id']) && $_GET['id'] > 0) 
		{
			$controller->todltPost($_GET['id']); 
		}
		else 
		{
			echo 'Erreur: aucun identifiant de billet envoyé'; 
		}
	}
	elseif($_GET['action'] =='deletePost')
	{ 
		
		if(isset($_GET['id']) && $_GET['id'] > 0)  
		{
			$controller->deletePost($_GET['id']);
		}
			else 
		{
			echo 'Erreur: aucun identifiant de billet envoyé'; 
		}
	}
}
else
{
	$controller->listPosts(); // if 'action' parameter isn't found ---> loading of posts list
}




