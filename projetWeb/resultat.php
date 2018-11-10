<html>

<head>
<link rel="stylesheet" href="votes.css"/>
</head>

<body>

	<?php
		require_once('fonctions.php');
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
								case 'tres_satisfait':
									$compt_tsatis += 1;
									break;
								case 'satisfait':
									$satis_satis += 1;
									break;
								case 'moyen':
									$compt_meh += 1;
									break;
								case 'mecontent':
									$compt_mecon += 1;
									break;
								case 'tres_mecontent':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof02")
						{
							$ue="anglais";
							switch($t[1]) {
								case 'tres_satisfait':
									$compt_tsatis += 1;
									break;
								case 'satisfait':
									$satis_satis += 1;
									break;
								case 'moyen':
									$compt_meh += 1;
									break;
								case 'mecontent':
									$compt_mecon += 1;
									break;
								case 'tres_mecontent':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof03")
						{
							$ue="programmation";
							switch($t[2]) {
								case 'tres_satisfait':
									$compt_tsatis += 1;
									break;
								case 'satisfait':
									$satis_satis += 1;
									break;
								case 'moyen':
									$compt_meh += 1;
									break;
								case 'mecontent':
									$compt_mecon += 1;
									break;
								case 'tres_mecontent':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof04")
						{
							$ue="algorithmique";
							switch($t[3]) {
								case 'tres_satisfait':
									$compt_tsatis += 1;
									break;
								case 'satisfait':
									$satis_satis += 1;
									break;
								case 'moyen':
									$compt_meh += 1;
									break;
								case 'mecontent':
									$compt_mecon += 1;
									break;
								case 'tres_mecontent':
									$compt_tmecon += 1;
									break;
							}
						}
						
						if($role=="prof05")
						{
							$ue="économie";
							switch($t[4]) {
								case 'tres_satisfait':
									$compt_tsatis += 1;
									break;
								case 'satisfait':
									$satis_satis += 1;
									break;
								case 'moyen':
									$compt_meh += 1;
									break;
								case 'mecontent':
									$compt_mecon += 1;
									break;
								case 'tres_mecontent':
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



		/*Affichage du nombres de votes pour chaque appréciation
		dans un tableau récapitulatif*/
		echo "<div id='container'><div id='affichage_vote'>";

		echo "<h1>Votes des étudiants";

		echo "<h3>Ici, vous pouvez voir le nombre de votes par appréciation que les étudiants ont attribués à votre UE.</h3>";

		echo "<div id='sub'>";

		echo "<table border='1' cellpadding='10px'>";

		echo "<th colspan='2'>Résultats des votes pour l'UE ".$ue."</th>";
		echo "<tr><td class='description'>Appréciation</td><td class='description'>Nombre de votes</td></tr>";
		echo "<tr><td class='appreciation'>Très satisfait<td>".$compt_tsatis."</td></tr>";
		echo "<tr><td class='appreciation'>Satisfait<td>".$satis_satis."</td></tr>";
		echo "<tr><td class='appreciation'>Moyen<td>".$compt_meh."</td></tr>";
		echo "<tr><td class='appreciation'>Mécontent<td>".$compt_mecon."</td></tr>";
		echo "<tr><td class='appreciation'>Très mécontent<td>".$compt_tmecon."</td></tr>";

		echo "</table>";

		echo "</div></div></div>";
		
	?>
	
</body>
</html>