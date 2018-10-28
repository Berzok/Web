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

		if($extension->getExtension() == "txt")
		{
			if($file == $dir_name."vote-".$login.".txt")
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
?>