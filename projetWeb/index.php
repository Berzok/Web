<?php
setcookie("cookie", "php5");
?>
<HtMl>
<h1>Page de connexion</h1>
<br>



<hr><fieldset><legend> Connexion </legend><table width='300'><form name='Demande' action='' method='post'<tr>
      <td>Nom d'utilisateur  </td>
	  <td><input name='nom' type='text' required /></td>
	  </tr><tr>
	  <tr><td>Mot de passe</td>
			<td><input name='password' type='password' required ></td>
		</tr><tr>
		
		<td>
		<input name='ok' type='submit' value='Valider'>
		</td>
	</tr>
</tr>
</form>
</table>
</fieldset>
</HtMl>

<?php
$dir_name = "data/"; //Nom du dossier contenant les fichiers csv

if(isset($_POST["nom"], $_POST["nom"]))
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
							if($file == "data/id-admin.csv" or $file == "data/id-profs.csv" or $file == "data/id-student.csv") //Permet de vérifier qu'on parcourt bien un des fichiers contenant les id et mots de passe
							{
								fclose($pointeur); //Fermeture du fichier parcouru
								closedir($dir); //Fermeture du dossier
								session_start();
								$_SESSION['login'] = $login;
								header("Location: intranet.php");
							}
							else
							{
								fclose($pointeur); //Fermeture du fichier parcouru
								closedir($dir); //Fermeture du dossier
								header("Location: index.php?err=1");
							}
						}
					}
				}
			}
		}
	}
}
if(isset($_GET["err"]))
{
	echo "Le nom d'utilisateur ou le mot de passe est incorrect.";
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