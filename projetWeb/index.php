<?php
setcookie("cookie", "php5");
?>
<html lang="fr">
<head>
	<title>Évaluation des enseignements - Connexion</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="homestyle.css"/>
	<link rel="icon" type="image/png" href="pics/icon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
	<div id="header-content">
		<a id="home" href="index.php"><h1 id="titre">Évaluation des enseignements</h1></a>
	</div>
	
	<div id="form-container">
	<form action='' method='post'<tr>
		<img id="logo" src="pics/logo.png"/>
		<br/>
		<h1>Connexion</h1>
		<label><b>Nom d'utilisateur</b></label><input name='nom' type='text' required />
		<br/>
		<label><b>Mot de passe</b></label><input name='password' type='password' required />
		<br/>
		<input name='ok' type='submit' value='Connexion'/>
		<?php
		if(isset($_GET["err"]))
		{
			echo "<p id='erreur'>Le nom d'utilisateur ou le mot de passe est incorrect.</p>";
		}
		?>
	</form>
	</div>
</body>
<?php
	require_once('footer.php');
?>
</html>
<?php
session_start();
if(!isset($_SESSION['login']))
{
	session_destroy();
}
else
{
	header('Location: login.php');
}

$dir_name = "data/"; //Nom du dossier contenant les fichiers csv

if(isset($_POST["nom"], $_POST["password"]))
{
	if(!empty($_POST["nom"]) and !empty($_POST["password"]))
	{
		$login = $_POST["nom"];
		$mdp = $_POST["password"];

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

						if($login == $t[0] and $mdp == $t[1])
						{
							if($file == "data/id-admin.csv")// or $file == "data/id-profs.csv" or $file == "data/id-student.csv") //Permet de vérifier qu'on parcourt bien un des fichiers contenant les id et mots de passe
							{
								fclose($pointeur); //Fermeture du fichier parcouru
								closedir($dir); //Fermeture du dossier
								session_start();
								$_SESSION['login'] = $login;
								$_SESSION['role'] = "admin";
								header("Location: login.php");
							}
							elseif($file == "data/id-profs.csv")
							{
								fclose($pointeur); //Fermeture du fichier parcouru
								closedir($dir); //Fermeture du dossier
								session_start();
								$_SESSION['login'] = $login;
								$_SESSION['role'] = "prof";
								header("Location: login.php");
							}
							elseif($file == "data/id-student.csv")
							{
								fclose($pointeur); //Fermeture du fichier parcouru
								closedir($dir); //Fermeture du dossier
								session_start();
								$_SESSION['login'] = $login;
								$_SESSION['role'] = "etu";
								header("Location: login.php");
							}
						}
					}
				}
			}
		}
		header('Location: index.php?err=a');
		exit;
	}
}


/*******************************/
/**********ANCIEN CODE**********/
/*******************************/


	/*$file="data/id-student.csv";
	if (file_exists($file))
		{
		$pointeur=fopen($file,"a");
		fclose($pointeur);
		}
	else
		{
		$pointeur=fopen($file,"r");
		fclose($pointeur);
		}
	$i=0;
	$pointeur=fopen($file,"r");
	$tableau = new ArrayObject();
	
	while (!feof($pointeur))
		{
		$tableau->append(fgetcsv($pointeur, ","));
		}*/
	/*
if(isset($_POST["nom"]))
{
	if(!empty($_POST["password"]))
	{
		$login = $_POST["nom"];
		$mdp = $_POST["password"];
		if($login === "admin" && $mdp === "admin")
		{
				session_start();
				$_SESSION['login'] = 'admin';
				header("Location: intranet.php");
		}
		else
		{
			echo "Non.";
		}
	}
}*/
	
	/*foreach($tableau as $v)
		{
		foreach($v as $value)
			{
			echo "<td>".$value."</td>";
			}
		echo "<tr></tr>";
		}
		echo "<tr></tr>";*/
	
	
?>



</HTML>