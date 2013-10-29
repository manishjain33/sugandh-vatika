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
		$queryPart = array();
		
		foreach ($data as $key=>$value)
		{
			if(isset($key)) array_push($queryPart, $key."='".$value."'");
		}
		
		return $this->mInterface->itemAdd(join(",", $queryPart));
	}
	
	public function getByID($id) {
		return $this->mInterface->itemGet_byKey("id", $id);
	}
	
	public function getAll() {
		return $this->mInterface->item_getList();
	}
	
	public function uploadPic($itemid) {
		$isUploaded = 0;
		$isSaved = 0;
		
		//folder path
		$path = "../images/items/$itemid/";
		
		//create a folder if not already exists
		if(!is_dir($path)) mkdir($path, 0777, true);
		
		//file path
		$filename = basename($_FILES['file']['name']);
		$path = $path . $filename;
		
		//move uploaded file to its appropriate location
		if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
			$isUploaded = 1;
		}
		
		//calculate filesize
		$filesize = filesize($path);
		
		//if file has been uploaded successfully, save details in database
		if($isUploaded == 1) {
			return $this->mInterface->item_imageSave("itemid=$itemid,path='$path',name='$filename',size='$filesize'");
		} else {
			return 0;
		}
	}
	
	public function removePic($id) {
		//get image details from database
		$result = $this->mInterface->item_imageGet("id=$id");
		
		if(is_array($result)) {
			$result = $result[0];
		}
		
		//remove image from server
		unlink($result["path"]);
		
		//remove image data from database
		if($this->mInterface->item_imageRemove($id)) {
			return "SUCCESS";
		} else {
			return "ERROR";
		}
	}
	
	public function getPic($itemid) {
		return $this->mInterface->item_imageGet("itemid=$itemid");
	}
}
?>