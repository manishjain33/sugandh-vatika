<?php
require_once('sessions.php');
require_once("mysql_interface.php");

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
		if(is_array($user)) $user = $user[0];
		else return "ERROR";
		
		//save username to cookie if required (before anything else)
		if($remember == 1) {
			setCookie('username', $username, time()+60*60*24*30);
			setCookie('remember', $remember, time()+60*60*24*30);
		}

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
	}

	public function out() {
		unset($_SESSION['user']);
		$this->session->destroy();
		return "SUCCESS";
	}
}
?>
