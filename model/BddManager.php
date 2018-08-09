<?php

abstract class BddManager
{


	/**
	*
	* method to connect database 
	*/
	protected function dbConnect()
	
	{
	    try
	    {
	        $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', LOGIN, PASSWORD);
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        return $db;
	    }
	    catch(Exception $e)
	    {
	       die('Erreur : '.$e->getMessage());
	    }
	}

}
