<?php
session_start();

require_once("constants.php");

class SESSIONS
{
	public $REDIRECT_URL = SESSION_EXPIRE_URL;
	
	public function check() {
		if(isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
			return true;
		} else {
			$this->destroy();
			header("Location: ".$this->REDIRECT_URL);
			return false;
		}
	}
	
	public function destroy() {
		session_destroy();
	}

}
?>