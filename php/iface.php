<?php
switch($_GET['fx'])
{
	case "sign":
		sign($_GET["op"]);
		break;
}

function sign($op) {
	require_once("sign.php");
	$sign = new SIGN();
	
	switch($op)
	{
		case "in":
			echo $sign->verify($_POST['username'], $_POST['password']);
			break;
			
		case "out":
			$sign->out();
			break;
	}
}
?>