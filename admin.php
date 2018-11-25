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
	<style type="text/css">
		html
		{
			background-image: url('pics/background.png')
		}
	</style>
</head>

<body>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<div class="icon-bar">
		<form action="pdf.php" method="POST">
		<i class="fa fa-file-pdf-o"></i>
		<input type="submit" value="Version PDF" class="pdf">
	</div>
</body>

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
<?php
	require_once('footer.php');
?>
</html>