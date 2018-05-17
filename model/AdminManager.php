<?php


class AdminManager

{	/**
	*
	* method to retrieve admin informations
	*/
	public function getLogin()
	{
		$db = $this->dbconnect();
		$req = $db->query('SELECT * FROM administration');
		$log = $req->fetch();

		return $log;
	}

	/**
	*
	* method to connect database 
	*/
	private function dbConnect()
	
	{
	    try
	    {
	        $db = new PDO('mysql:host=localhost:8889;dbname=P3;charset=utf8', 'root', 'root');
	        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        return $db;
	    }
	    catch(Exception $e)
	    {
	        die('Erreur : '.$e->getMessage());
	    }
	}
}