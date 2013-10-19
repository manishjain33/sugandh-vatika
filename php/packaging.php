<?php
class PACKAGING
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
		
		return $this->mInterface->packagingAdd(join(",", $queryPart));
	}
	
	public function getList()
	{
		return $this->mInterface->packagingList();
	}
	
	public function remove($id)
	{
		return $this->mInterface->packagingRemove($id);
	}
}
?>