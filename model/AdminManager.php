<?php

require_once ('model/BddManager.php');


class AdminManager extends BddManager

{	/**
	*
	* method to retrieve admin informations
	*/
	public function getLogin()
	{
		$db  = $this->dbconnect();
		$req = $db->query('SELECT * FROM administration');
		$log = $req->fetch();

		return $log;
	}

	
}