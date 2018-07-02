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
	        require('config.php');
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        return $db;
	    }
	    catch(Exception $e)
	    {
	        die('Erreur : '.$e->getMessage());
	    }
	}

}
