<?php
session_start();
if((!isset($_SESSION['login']) or !isset($_SESSION['role'])) or ($_SESSION['role'] != 'etu'))
{
	session_destroy();
	header("Location: index.php");
}
else
{
	require_once('header.php');
}
?>