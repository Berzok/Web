<?php
session_start();
echo "<h1>Intranet</h1>";

if(!isset($_SESSION['login']))
{
	session_destroy();
	header("Location: index.php");
}
else
{
	$dir_name = "data/"; //Nom du dossier contenant les fichiers csv

	$s = $_SESSION['login'];

	$dir = opendir($dir_name); //Ouverture du dossier

	while($file = readdir($dir)) //Lecture du contenu du dossier
	{
		$file = $dir_name.$file; //Nom du fichier

		$extension = new SplfileInfo($file); //Variable permettant de récupérer l'extension d'un fichier

		if($extension->getExtension() == "csv") //On vérifie que le fichier traité est bien un fichier csv
		{
			$pointeur = fopen($file, "r"); //Pointeur pour parcourir le fichier

			while(!feof($pointeur))
			{
				$t = fgetcsv($pointeur, 1024, ","); //Récupération des données d'un fichier

				if(is_array($t))
				{
					if($s == $t[0])
					{
						/*Les structures suivantes permettent de savoir dans quel fichier
						se situe l'id utilisé pour se connecter, afin de savoir quelle
						page afficher à l'utilisateur en fonction de ses droits*/

						if($file == "data/id-admin.csv")
						{
							echo "admin"; //A remplacer par un require ou une redirection vers la page concernée
						}
						elseif($file == "data/id-profs.csv")
						{
							echo "prof"; //A remplacer par un require ou une redirection vers la page concernée
						}
						elseif($file == "data/id-student.csv")
						{
							echo "student"; //A remplacer par un require ou une redirection vers la page concernée
						}
					}
				}
			}
			fclose($pointeur); //Fermeture du fichier parcouru
		}
	}
	closedir($dir); //Fermeture du dossier
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