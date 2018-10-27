<html lang="fr">
<head>
	<title>Évaluation des enseignements - Connexion</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div id="header-content">
		<a id="home" href="index.php"><h1 id="titre">Évaluation des enseignements</h1></a>
		<nav id="menu">
			<?php
			if(isset($_SESSION['login']))
			{
				$role = $_SESSION['login'];
				echo "<p id='hello'>Bonjour <b id='role'>".$role."</b> !</p>";
				echo "<p id='sep'>&#124;</p>";
				echo "<a id='logout' href='logout.php'>Déconnexion</a>";
			}
			?>
		</nav>
</div>
</body>
</html>