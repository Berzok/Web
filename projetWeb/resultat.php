<html>

<head>
<link rel="stylesheet" href="votes.css"/>
</head>

<body>

	<?php
		$ue="";
		$compt_tsatis = 0;
		$satis_satis = 0;
		$compt_meh = 0;
		$compt_mecon = 0;
		$compt_tmecon = 0;
		
		$dir_name = "votes/"; //Nom du dossier contenant les fichiers csv

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
						
						if($role=="prof01")
						{
							$ue="mathématiques";
							switch($t[0]) {
								case 'tsatis':
									$compt_tsatis += 1;
									break;
								case 'satis':
									$satis_satis += 1;
									break;
								case 'meh':
									$compt_meh += 1;
									break;
								case 'mecon':
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof02")
						{
							$ue="anglais";
							switch($t[1]) {
								case 'tsatis':
									$compt_tsatis += 1;
									break;
								case 'satis':
									$satis_satis += 1;
									break;
								case 'meh':
									$compt_meh += 1;
									break;
								case 'mecon':
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof03")
						{
							$ue="programmation";
							switch($t[2]) {
								case 'tsatis':
									$compt_tsatis += 1;
									break;
								case 'satis':
									$satis_satis += 1;
									break;
								case 'meh':
									$compt_meh += 1;
									break;
								case 'mecon':
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof04")
						{
							$ue="algorithmique";
							switch($t[3]) {
								case 'tsatis':
									$compt_tsatis += 1;
									break;
								case 'satis':
									$satis_satis += 1;
									break;
								case 'meh':
									$compt_meh += 1;
									break;
								case 'mecon':
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof05")
						{
							$ue="economie";
							switch($t[4]) {
								case 'tsatis':
									$compt_tsatis += 1;
									break;
								case 'satis':
									$satis_satis += 1;
									break;
								case 'meh':
									$compt_meh += 1;
									break;
								case 'mecon':
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$compt_tmecon += 1;
									break;
							}
						}

					}
				}
				fclose($pointeur); //Fermeture du fichier parcouru
			}
		}
		closedir($dir); //Fermeture du dossier
		echo "<div id='description'>";
		echo "<br><fieldset>";
		echo "<legend>"."Résultats pour l'ue ".$ue."</legend>";
		echo $compt_tsatis." Très satisfait<br>";
		echo $satis_satis." Satisfait<br>";
		echo $compt_meh." Moyen<br>";
		echo $compt_mecon." Mécontent<br>";
		echo $compt_tmecon." Très mécontent<br>";
		echo "</fieldset><br>";
		echo "</div>";
	?>
	
</body>
</html>