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
	
	public function verify($username, $hash, $remember=0) {
		$user = $this->mInterface->getUserDetails($username);

		if($hash == $user["password"]) {
			$_SESSION['user'] = $username;
			return "SUCCESS";
		} else {
			/*
				If login verification fails, send a authorization code[au] to notify:
				in: Invalid Credentials
			*/
			return "in";
		}
		//save username to cookie if required
       		if($remember == 1)
		     setCookie('username', $username);
	}

	public function out() {
		unset($_SESSION['user']);
		$session->check();
	}
}
?>