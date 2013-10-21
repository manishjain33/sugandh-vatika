<?php
require_once 'mysql_db.php';

class MYSQL_INTERFACE
{
	public $db_object = false;
	public $db_connection = false;
	
	public function __construct() {
		$this->db_object = new MYSQL_DB();
		$this->db_connection = $this->db_object->connect();
	}
	
	public function getUserDetails($username) {
		$query = "SELECT * from users where username='".$this->db_object->escapeString($username)."'";
		$this->db_object->query_db($query);

		return $this->db_object->getResultSet();
	}
	
	public function categoryAdd($queryPart) {
		$query = "INSERT into categories set ".$queryPart;
		$this->db_object->query_db($query);
		
		return $this->db_object->getID();
	}
	
	public function categoryRemove($categoryID) {
		$query = "DELETE FROM categories where id=".$categoryID;
		
		return $this->db_object->query_db($query);
	}
	
	public function categoryList() {
		$query = "SELECT * from categories";
		$this->db_object->query_db($query);
		
		return $this->db_object->getResultSet();
	}
	
	public function packagingAdd($queryPart) {
		$query = "INSERT into packagings set ".$queryPart;
		$this->db_object->query_db($query);
		
		return $this->db_object->getID();
	}
	
	public function packagingRemove($packagingID) {
		$query = "DELETE FROM packagings where id=".$packagingID;
		
		return $this->db_object->query_db($query);
	}
	
	public function packagingList() {
		$query = "SELECT * from packagings";
		$this->db_object->query_db($query);
		
		return $this->db_object->getResultSet();
	}
	
	public function itemAdd($queryPart) {
		$query = "INSERT into items set ".$queryPart;
		$this->db_object->query_db($query);
		
		return $this->db_object->getID();
	}
	
	public function item_imageSave($queryPart) {
		$query = "INSERT into item_images set ".$queryPart;
		$this->db_object->query_db($query);
		
		return $this->db_object->getID();
	}
	
	public function item_imageGet($queryPart) {
		$query = "SELECT * FROM item_images where ".$queryPart;
		$this->db_object->query_db($query);
		
		return $this->db_object->getResultSet();
	}
	
	public function item_imageRemove($id) {
		$query = "DELETE FROM item_images where id='".$id."'";
		
		return $this->db_object->query_db($query);
	}
	
	public function misc_getUserModules($username) {
		$query = "SELECT modules from users where username='".$username."'";
		$this->db_object->query_db($query);
	
		return $this->db_object->getResultRow();
	}
	
	public function misc_getAllModules() {
		$query = "SELECT * from modules";
		$this->db_object->query_db($query);
	
		return $this->db_object->getResultSet();
	}
}
?>
