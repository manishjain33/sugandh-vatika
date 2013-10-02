<?php
require_once("sign.php");
require_once 'category.php';

switch($_GET['fx'])
{
	case "sign":
		sign($_GET["op"]);
		break;
		
	case "category":
		category($_GET["op"]);
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
