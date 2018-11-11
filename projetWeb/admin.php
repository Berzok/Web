<?php
session_start();
if((!isset($_SESSION['login']) or !isset($_SESSION['role'])) or ($_SESSION['role'] != 'admin'))
{
	session_destroy();
	header("Location: index.php");
}
else
{
	require_once('header.php');
}
?>


<html lang="fr">
<head>
	<title>Résultats des évaluations</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="votes.css"/>
</head>
<body>
	<div id="container">
		<div id="vote">
			<?php
				require_once("jiji_le_zombie.php");
			?>
		</div>
	</div>
</body>
</html>