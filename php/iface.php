<?php
session_start();

switch($_GET['mode'])
{
	case "sign":
		sign($_GET["fx"]);
		break;
}

function sign($fx) {
	require_once("sign.php");
	
	switch($fx)
	{
		case "in":
			break;
			
		case "out":
			break;
	}
}
?>