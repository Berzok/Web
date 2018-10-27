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

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Intranet</title>
	<meta charset="utf-8"/>
</head>
<body>
<form action='logout.php' method='POST'>
<input name="logout" type="submit" value="Déconnexion" />
</form>
</html>