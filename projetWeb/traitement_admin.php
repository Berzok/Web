<html>
<head>
	<link rel='stylesheet' href='admin.css'/>
</head>
</html>
	


	<?php
		
		
		
		function print_dbg($x)
			{
			echo "<pre>";
			print_r($x);
			echo "</pre>";
			}
		
		
		function dechiffrer($y)
				{
				$y = round($y, 0, PHP_ROUND_HALF_UP);
				switch($y)
					{
					case(4):
						return "très satisfaits";
						break;
					case(3):
						return "satisfaits";
						break;
					case(2):
						return "d'un avis mitigé";
						break;
					case(1):
						return "mécontents";
						break;
					case(0):
						return "très mécontents";
						break;
					}
				}
		
		
		function moyenne($x)
			{
			$tableau = array();
			$compteur = 0;
			foreach($x as $nom => $valeur)
				{
				if($valeur === 0)
					{
					continue;
					}
				$value = 0;
				switch($nom)
					{
					case "tres_satisfait":
						$value += 4;
						$compteur++;
						break;
					case "satisfait":
						$value += 3;
						$compteur++;
						break;
					case "mitige":
						$value += 2;
						$compteur++;
						break;
					case "mecontent":
						$value += 1;
						$compteur++;
						break;
					case "tres_mecontent":
						$value += 0;
						$compteur++;
						break;
					}
				array_push($tableau, $value);
				}
			return (array_sum($tableau)/$compteur);
			}
		
		

		function e($array)
			{
			// square root of sum of squares devided by N-1
			return sqrt(array_sum(array_map("sd_square", $array, array_fill(0,count($array), (array_sum($array) / count($array)) ) ) ) / (count($array)) );
			} 
		
		function ecart_type2(array $x, $sample = false)
			{
			$n = count($x);
			$mean = array_sum($x) / $n;
			$carry = 0.0;
			foreach ($x as $val)
				{
				$d = ((double) $val) - $mean;
				$carry += $d * $d;
				}
			if ($sample)
				{
			   --$n;
				}
			return round(sqrt($carry/$n), 2, PHP_ROUND_HALF_UP);
			}
			
		function ecart_type($x)
			{
			$tableau = array();
			$compteur = 0;
			foreach($x as $nom => $valeur)
				{
				if($valeur === 0)
					{
					continue;
					}
				$value = 0;
				switch($nom)
					{
					case "tres_satisfait":
						$value += 4;
						$compteur++;
						break;
					case "satisfait":
						$value += 3;
						$compteur++;
						break;
					case "mitige":
						$value += 2;
						$compteur++;
						break;
					case "mecontent":
						$value += 1;
						$compteur++;
						break;
					case "tres_mecontent":
						$value += 0;
						$compteur++;
						break;
					}
				array_push($tableau, $value);
				}
			return ecart_type2($tableau);
			}
	
		function display_ue($ue, $x)
			{
			echo "<div class='description'>";
			echo "<br><fieldset>";
			echo "<legend>"."Résultats pour l'UE ".$ue."</legend>";
			echo $x["tres_satisfait"]." Très satisfait<br>";
			echo $x["satisfait"]." Satisfait<br>";
			echo $x["mitige"]." Mitigé<br>";
			echo $x["mecontent"]." Mécontent<br>";
			echo $x["tres_mecontent"]." Très mécontent<br>";
			echo "<br>";
			print_r("En moyenne, les élèves sont ". dechiffrer(moyenne($x)) .".<br>");
			print_r("La dispersion autour de la moyenne (écart-type) est de ". ecart_type($x));
			echo "</fieldset><br>";
			echo "</div>";
			}
		
		
		
		$ue="";
		
		$notes_maths = array(
			"tres_satisfait" => 0,
			"satisfait" => 0,
			"mitige" => 0,
			"mecontent" => 0,
			"tres_mecontent" => 0,
			);
			
		$notes_anglais = array(
			"tres_satisfait" => 0,
			"satisfait" => 0,
			"mitige" => 0,
			"mecontent" => 0,
			"tres_mecontent" => 0,
			);
		
		$notes_prog = array(
			"tres_satisfait" => 0,
			"satisfait" => 0,
			"mitige" => 0,
			"mecontent" => 0,
			"tres_mecontent" => 0,
			);
		
		$notes_algo = array(
			"tres_satisfait" => 0,
			"satisfait" => 0,
			"mitige" => 0,
			"mecontent" => 0,
			"tres_mecontent" => 0,
			);
			
		$notes_eco = array(
			"tres_satisfait" => 0,
			"satisfait" => 0,
			"mitige" => 0,
			"mecontent" => 0,
			"tres_mecontent" => 0,
			);

		
		$lesVotes = array(
			"mathématiques" => $notes_maths,
			"anglais" => $notes_anglais,
			"programmation" => $notes_prog,
			"algorithmique" => $notes_algo,
			"économie" => $notes_eco,
			);
		
		
		$compt_tres_satisfait = 0;
		$satisfait_satisfait = 0;
		$compt_mitige = 0;
		$compt_mecontent = 0;
		$compt_tres_mecontent = 0;
		
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
						

							$ue="mathématiques";
							switch($t[0])
								{
								case 'tres_satisfait':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_tres_satisfait += 1;
									break;
								case 'satisfait':
									$lesVotes[$ue]["$t[0]"] += 1;
									$satisfait_satisfait += 1;
									break;
								case 'mitige':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_mitige += 1;
									break;
								case 'mecontent':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_mecontent += 1;
									break;
								case 'tres_mecontent':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_tres_mecontent += 1;
									break;
								}
						

							$ue="anglais";
							switch($t[1])
								{
								case 'tres_satisfait':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_tres_satisfait += 1;
									break;
								case 'satisfait':
									$lesVotes[$ue]["$t[1]"] += 1;
									$satisfait_satisfait += 1;
									break;
								case 'mitige':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_mitige += 1;
									break;
								case 'mecontent':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_mecontent += 1;
									break;
								case 'tres_mecontent':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_tres_mecontent += 1;
									break;
								}

							
							$ue="programmation";
							switch($t[2])
								{
								case 'tres_satisfait':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_tres_satisfait += 1;
									break;
								case 'satisfait':
									$lesVotes[$ue]["$t[2]"] += 1;
									$satisfait_satisfait += 1;
									break;
								case 'mitige':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_mitige += 1;
									break;
								case 'mecontent':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_mecontent += 1;
									break;
								case 'tres_mecontent':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_tres_mecontent += 1;
									break;
								}
						

							$ue="algorithmique";
							switch($t[3])
								{
								case 'tres_satisfait':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_tres_satisfait += 1;
									break;
								case 'satisfait':
									$lesVotes[$ue]["$t[3]"] += 1;
									$satisfait_satisfait += 1;
									break;
								case 'mitige':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_mitige += 1;
									break;
								case 'mecontent':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_mecontent += 1;
									break;
								case 'tres_mecontent':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_tres_mecontent += 1;
									break;
								}

						
							$ue="économie";
							switch($t[4])
								{
								case 'tres_satisfait':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_tres_satisfait += 1;
									break;
								case 'satisfait':
									$lesVotes[$ue]["$t[4]"] += 1;
									$satisfait_satisfait += 1;
									break;
								case 'mitige':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_mitige += 1;
									break;
								case 'mecontent':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_mecontent += 1;
									break;
								case 'tres_mecontent':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_tres_mecontent += 1;
									break;
								}

					}
				}
				fclose($pointeur); //Fermeture du fichier parcouru
			}
		}
		
		closedir($dir); //Fermeture du dossier
		
		$lesUE = array("Mathématiques", "Anglais", "Programmation", "Algorithmie", "Économie");
		
		
		
		foreach($lesVotes as $matiere => $nom)
			{
			echo "<br />";
			display_ue($matiere, $nom);
			}
		
		
	?>
