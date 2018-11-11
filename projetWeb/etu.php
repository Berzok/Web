<?php
//Appel du script contenant des fonctions utilisées dans l'application
require_once("fonctions.php");
session_start();

/*Si un utilisateur tente d'accéder à cette page sans être connecté ou sans avoir le rôle requis,
il est redirigé vers la page d'accueil.*/
if((!isset($_SESSION['login']) or !isset($_SESSION['role'])) or ($_SESSION['role'] != 'etu'))
{
	session_destroy();
	header("Location: index.php");
}
else
{
	require_once("header.php");
}
?>

<html lang="fr">
<head>
	<title>Évaluation des enseigmenets</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="votes.css"/>
</head>
<body>
	<div id="container">
		<div id="vote">
			<?php
			if(aVote($_SESSION['login']) == false)
			{
				require_once("voteetu.php");
			}
			else
			{
				echo "a voté"; //A modifier: à la place, on affiche les données du vote
			}
			?>
		</div>
	</div>
</body>
</html>