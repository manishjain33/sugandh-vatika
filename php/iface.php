<?php
require_once("sign.php");
require_once 'category.php';
require_once 'packaging.php';
require_once 'item.php';

switch($_GET['fx'])
{
	case "sign":
		sign($_GET["op"]);
		break;
		
	case "category":
		category($_GET["op"]);
		break;
		
	case "packaging":
		packaging($_GET["op"]);
		break;
		
	case "item":
		item($_GET["op"]);
		break;
		
	case "misc":
		misc($_GET['op']);
		break;
}

function sign($op) {
	
	$sign = new SIGN();
	
	switch($op)
	{
		case "in":
			echo $sign->verify($_POST['username'], $_POST['password'], $_POST['remember']);
			break;
			
		case "out":
			echo $sign->out();
			break;
	}
}

function category($op) {
	$category = new CATEGORY();
	
	switch($op)
	{
		case "add":
			echo $category->add($_POST);
			break;
			
		case "remove":
			echo $category->remove($_GET['cid']);
			break;
			
		case "list":
			$list = $category->getList();
			if(gettype($list) == "string") echo $list;
			echo json_encode($list);
			break;
	}
}

function packaging($op) {
	$packaging = new PACKAGING();
	
	switch($op) {
		case "add":
			echo $packaging->add($_POST);
			break;
			
		case "list":
			$list = $packaging->getList();
			if(gettype($list) == "string") echo $list;
			echo json_encode($list);
			break;
	}
}

function item($op) {
	$item = new ITEM();
	
	switch($op) {
		case "add":
			echo $item->add($_POST);
			break;
		
		case "image.add":
			echo $item->uploadPic($_GET["itemid"]);
			break;
			
		case "image.remove":
			echo $item->removePic($_GET["id"]);
			break;
			
		case "image.get":
			echo json_encode($item->getPic($_GET["itemid"]));
			break;
	}
}

function misc($op)
{
	require_once("misc.php");
	$misc = new MISC();

	switch($op)
	{
		case "getModules":
			$modules = $misc->getModules();
			if(gettype($modules) == "string") echo $modules;
			else echo json_encode($modules);
			break;
	}
}
?>
