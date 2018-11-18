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
	<title>Évaluation des enseignements</title>
	<meta charset="UTF-8"/>
	<?php
		if(aVote($_SESSION['login']) == false)
		{
			echo "<link rel='stylesheet' href='etu.css'/>";
		}
		else
		{
			echo "<link rel='stylesheet' href='etu2.css'/>";
		}
	?>
</head>
<body>
	<div id='container'>
		<?php
			if(aVote($_SESSION['login']) == false)
			{
				echo "<div id='vote'>";
				require_once("voteetu.php");
				echo "</div>";
			}
			else
			{
				echo "<div id='affichage_vote'>";
				echo "<h1>Vote effectué</h1>";
				echo "<h3>Voici un tableau récapitulatif de votre vote.</h3>";
				echo "<div id='sub'>";
				afficherVote($_SESSION['login']);
				echo "</div></div>";

			}
		?>
	</div>
</body>
</html>