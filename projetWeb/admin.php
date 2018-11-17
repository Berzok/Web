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
	require_once('fonctions.php');
}
?>


<html lang="fr">
<head>
	<title>Résultats des évaluations</title>
	<meta charset="UTF-8"/>
	<?php
		if(existenceVotes() == true)
		{
			echo "<link rel='stylesheet' href='empty.css'/>";
		}
		else
			echo "<link rel='stylesheet' href='admin.css'/>";
	?>
	<link rel="stylesheet" href="admin.css"/>
</head>
<body>
	<div id="container">
		<div id="recap_vote">
			<div id="affichage_vote">
				<?php
					if(existenceVotes() == true)
					{
						require_once("traitement_admin.php");
					}
					else
					{
						require_once("empty.php");
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>