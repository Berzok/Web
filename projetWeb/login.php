<?php
session_start();
if(!isset($_SESSION['login']) or !isset($_SESSION['role']))
{
	session_destroy();
	header("Location: index.php");
}
else
{
	switch ($_SESSION['role']) {
		case 'admin':
			header('Location: admin.php');
			break;
		
		case 'prof':
			header('Location: prof.php');
			break;

		case 'etu':
			header('Location: etu.php');
			break;

		default:
			header("Location: index.php");
			break;
	}
}
?>