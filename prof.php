<?php
session_start();
if((!isset($_SESSION['login']) or !isset($_SESSION['role'])) or ($_SESSION['role'] != 'prof'))
{
	session_destroy();
	header("Location: index.php");
}
else
{
	require_once('header.php');
	switch($_SESSION['login']) {
		case 'prof01':
			echo "<style>
					html
					{
						background-image: url('pics/maths_background.jpg');
					}
				</style>";
			break;
		
		case 'prof02':
			echo "<style>
					html
					{
						background-image: url('pics/uk_background.jpg');
					}
				</style>";

		case 'prof03':
			echo "<style>
					html
					{
						background-image: url('pics/programming_background.jpg');
					}
				</style>";
			break;

		case 'prof04':
			echo "<style>
					html
					{
						background-image: url('pics/algo_background.png');
					}
				</style>";
			break;

		case 'prof05':
			echo "<style>
					html
					{
						background-image: url('pics/economy_background.jpg');
					}
				</style>";
			break;

		default:
			# code...
			break;
		}
		require_once('fonctions.php');
	
}
?>

<html lang="fr">
<head>
	<title>Résultats des évaluations</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="prof.css"/>
	<?php

?>
</head>
<body>
	<div id="container">
		<div id="vote">
			<div id="affichage_vote">
				<?php
					if(existenceVotes() == false)
					{
						require_once('empty.php');
					}		
					else
					{
						require_once("resultat.php");
					}
				?>
			</div>
		</div>
	</div>
</body>
<?php
	require_once('footer.php');
?>
</html>