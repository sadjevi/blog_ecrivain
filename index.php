<?php
session_start();


require('controller/frontend.php'); 
require('controller/backend.php'); 



$controller = new Frontend();
$backController = new BackController();


<<<<<<< HEAD
isset($_GET['action']) ? $action = $_GET['action'] : $action = 'listPosts';
if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
=======

(isset($_GET['action'])) ? $action = $_GET['action'] : $action = 'listPosts';
>>>>>>> parent of ce2b364... backend bootstrapping



switch ($action) 
{											
											// frontend

	case 'jf':
		$controller->jf();
	break;

	case 'accueil':
		$controller->accueil();
	break;

	case 'selection':
		$controller->selection();
	break;

	case 'ml':
		$controller->ml();
	break;	
											
	case 'listPosts': 
		$controller->listPosts();
	break;

	case 'getEntirePost': 
		if(isset($id) && $id > 0)  
		{
			$controller->getEntirePost($id); 
		}
		else 
		{	
			$controller->getErrorView("Erreur: aucun identifiant de billet envoyé");
			//echo 'Erreur: aucun identifiant de billet envoyé'; 
		}
	break;

	case 'post': 
		if(isset($id) && $id > 0) 
		{
			$controller->post($id); 
		}
		else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;


	case 'postComment': 
		if(isset($id) && $id > 0)
		{
			if(!empty ($_POST['author']) && !empty ($_POST['content']))
			{
				$controller->postComment($id, $_POST['author'], $_POST['content']);
			}
			else 
			{
				$controller->getErrorView('Erreur: le commentaire n a pu être ajouté, tous les champs ne sont pas remplis !');
			}
		}		
		else
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé');
		}
	break;

	case 'reportCom': 
		if(isset($id) && $id > 0)  
		{
			$controller->reportCom($id); 
		}
		else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;





													// backend


	case 'adminListPosts':
		if(isset($_SESSION['auth'])) 
		{
			$backController->adminListPosts();
		} 		
		 else 
		{
			$controller->getErrorView();
		}
	break;

	case 'log_pass': 
		$backController->log_pass();
	break;

	case 'getlogIn': 
		$backController->getlogIn();
	break;


	case 'getlogOut': 
		$backController->getlogOut();
	break;

	case 'save':
		$backController->save($_POST['datas']);
	break;

	case 'adminPost': 
		if(isset($id) && $id > 0) 
		{
			$backController->adminPost($id); 
		}
		else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;


	case 'adminPostRep': 
		if(isset($id) && $id > 0) 
		{
			$backController->adminPostRep($id); 
		}
		else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;

	case 'listLastPosts': 
		$backController->listLastPosts();
	break;

	case 'createPost': 
		if(!empty ($_POST['title']) && !empty ($_POST['post']))
		{
			$backController->createPost($_POST['title'], $_POST['post']);
		}
		else
		{
			$controller->getErrorView('erreur le billet n a pu être enregistré');
		}
	break;


	case 'toupdtPost': 
		if(isset($id) && $id > 0)  
		{
			$backController->toupdtPost($id); 
		}
		else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;

	case 'approveCom': 
		if(isset($id) && $id > 0)  
		{
			$backController->approveCom($id); 
		}
		else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;


	case 'getRepComs': 
		$backController->getRepComs();
	break;


	case 'updatePost': 
		$backController->updatePost($_POST['id'] ,$_POST['title'], $_POST['post']);
	break;


	case 'todltPost': 
		if(isset($id) && $id > 0) 
		{
			$backController->todltPost($id); 
		}
		else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;


	case 'deletePost': 
		if(isset($id) && $id > 0)  
		{
			$backController->deletePost($id);
		}
			else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;


	case 'deleteComment': 
		if(isset($id) && $id > 0)  
		{
			$backController->deleteComment($id);
		}
			else 
		{
			$controller->getErrorView('Erreur: aucun identifiant de billet envoyé'); 
		}
	break;
		
	default:
       		$controller->getErrorView("Erreur 404 - Oups, cette page n'existe pas, désolé, Bye Bye !");
}

	
