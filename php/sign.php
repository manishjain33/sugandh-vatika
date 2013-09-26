<?php
require_once("mysql_interface.php");
require_once('sessions.php');

class SIGN
{
	public $mInterface;
	public $session;
	
	public function __construct() {
		$this->mInterface = new MYSQL_INTERFACE();
		$this->session = new SESSIONS();
	}
	
	public function verify($username, $hash) {
		$user = $this->mInterface->getUserDetails($username);
		if($hash == hash("sha256", $user["password"])) {
			$_SESSION['user'] = $username;
			return "SUCCESS";
		} else {
			/*
				If login verification fails, send a authorization code[au] to notify:
				in: Invalid Credentials
			*/
			return "in";
		}
	}
	
	public function out() {
		unset($_SESSION['user']);
		$session->check();
	}
}
?>