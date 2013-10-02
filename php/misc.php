<?php
require_once("mysql_interface.php");

class MISC
{
	public $mInterface;
	
	public function __construct() {
		$this->mInterface = new MYSQL_INTERFACE();
	}
	
	public function getModules() {
		$modules = $this->mInterface->misc_getAllModules();
		$allModules = array();
		foreach($modules as $k=>$v) {
			$allModules[$v["id"]] = $v;
		}
		
		$allowedModules = "";
		$userModules = $this->mInterface->misc_getUserModules($_SESSION["user"]);
		if(is_array($userModules)) $userModules = $userModules[0];
		else return "ERROR";

		
			
			$allowedModules = array();
			$userModules = explode(",", $userModules);
			for($i=0; $i<count($userModules); $i++) {
				if(isset($allModules[$userModules[$i]])) {
					$allowedModules[$userModules[$i]] = $allModules[$userModules[$i]];
				}
			}
		
		
		return $allowedModules;
	}
}
?>
