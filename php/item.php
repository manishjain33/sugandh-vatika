<?php
class ITEM
{
	public $mInterface;
	
	public function __construct()
	{
		$this->mInterface = new MYSQL_INTERFACE();
	}
	
	public function add($data)
	{
		
	}
	
	public function uploadPic($id = 23) {
		$path = "../images/items/$id/";
		$path = $path . basename($_FILES['file']['name']);
		
		if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
			return "SUCCESS";
		} else {
			return "ERROR";
		}
	}
}
?>