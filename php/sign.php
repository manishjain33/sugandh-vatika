<?php
require_once("mysql_interface.php");

class LOGIN
{
	public $mInterface;
	
	public function __construct() {
		$this->mInterface = new MYSQL_INTERFACE();
	}
	
	public function verify($username, $hash) {
		$user = $this->mInterface->getUser($username);
		if($hash == hash("sha256", $user["password"])) {
			$_SESSION['user'] = $username;
			header("Location: /embarc-utils/dashboard.php");
		} else {
			/*
				If login verification fails, send a authorization code[au] to notify:
				in: Invalid Credentials
			*/
			header("Location: /embarc-utils/login.html?au=in");
		}
	}
}
?>