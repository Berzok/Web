<?php

//Fonction permettant de vérifier si un étudiant a voté ou non
function aVote($login)
{
	$vote = false;
	$dir_name = "votes/";
	$dir = opendir($dir_name);
	while($file = readdir($dir))
	{
		$file = $dir_name.$file;
		$extension = new SplfileInfo($file);
		if($extension->getExtension() == "csv")
		{
			if($file == $dir_name."vote-".$login.".csv")
			{
				$vote = true;
			}
		}
		else
		{
			$vote = false;
		}
	}
	return $vote;
}


/*Fonction permettant d'afficher le
vote d'un étudiant sur sa page personnelle*/
function afficherVote($login)
{
	$file = "votes/vote-".$login.".csv";

	$pointeur = fopen($file, "r");

	echo "<table border='1' cellpadding='10px'>";
	echo "<tr>";
	echo "<th>Mathématiques</th><th>Anglais</th><th>Programmation</th><th>Algorithmique</th><th>Économie</th>";
	echo "</tr>";
	echo "<tr>";
	while(!feof($pointeur))
	{
		$t = fgetcsv($pointeur, 1024, ",");

		if(is_array($t))
		{
			foreach($t as $vote)
			{
				$vote = reecriture($vote);
				echo "<td>{$vote}</td>";
			}
		}
	}
	fclose($pointeur);
	echo "</tr>";
	echo "</table>";
}

/*Fonction permettant de réécrire correctement
les appréciations données par les étudiants*/
function reecriture($appreciation)
{
	switch($appreciation)
	{
		case "tres_mecontent":
			$appreciation = "Très mécontent(e)";
			break;

		case "mecontent":
			$appreciation = "Mécontent(e)";
			break;

		case "mitige":
			$appreciation = "Moyen";
			break;

		case "satisfait":
			$appreciation = "Satisfait(e)";
			break;

		case "tres_satisfait":
			$appreciation = "Très satisfait(e)";
			break;

		default:
			header("Location: etu.php");
			break;
	}

	return $appreciation;
}

function existenceVotes()
{
	$existeVote = false;
	$dir_name = "votes/";
	$dir = opendir($dir_name);
	while($file = readdir($dir))
	{
		$file = $dir_name.$file;
		$extension = new SplfileInfo($file);
		if($extension->getExtension() == "csv")
		{
			$existeVote = true;
		}
		else
		{
			$vote = false;
		}
	}
	return $existeVote;
}
?>