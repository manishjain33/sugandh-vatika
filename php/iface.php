<?php
require_once("sign.php");

switch($_GET['fx'])
{
	case "sign":
		sign($_GET["op"]);
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
?>