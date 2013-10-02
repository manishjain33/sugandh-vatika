<?php
class CATEGORY
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
		
		if($this->mInterface->categoryAdd(join(",", $queryPart))) return "SUCCESS";
		else return "ERROR";
	}
	
	public function getList()
	{
		return $this->mInterface->categoryList();
	}
	
	public function remove($id)
	{
		return $this->mInterface->categoryRemove($id);
	}
}
?>