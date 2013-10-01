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
}

function sign($op) {
	
	$sign = new SIGN();
	
	switch($op)
	{
		case "in":
			echo $sign->verify($_POST['username'], $_POST['password'], $_POST['remember']);
			break;
			
		case "out":
			$sign->out();
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
			
		case "list":
			echo json_encode($category->getList());
			break;
	}
}
?>
