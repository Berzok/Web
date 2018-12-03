<html>

<head>
<link rel="stylesheet" href="votes.css"/>
</head>

<body>

	<?php
		
		
		
		function print_dbg($x)
			{
			echo "<pre>";
			print_r($x);
			echo "</pre>";
			}
		
		
		function dechiffrer($y)
				{
				$y = intval($y);
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
					case "tsatis":
						$value += 4;
						$compteur++;
						break;
					case "satis":
						$value += 3;
						$compteur++;
						break;
					case "meh":
						$value += 2;
						$compteur++;
						break;
					case "mecon":
						$value += 1;
						$compteur++;
						break;
					case "tmecon":
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
		
		function ecart_type2(array $a, $sample = false)
			{
			$n = count($a);
			$mean = array_sum($a) / $n;
			$carry = 0.0;
			foreach ($a as $val)
				{
				$d = ((double) $val) - $mean;
				$carry += $d * $d;
				}
			if ($sample)
				{
			   --$n;
				}
			return (sqrt($carry / $n));
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
					case "tsatis":
						$value += 4;
						$compteur++;
						break;
					case "satis":
						$value += 3;
						$compteur++;
						break;
					case "meh":
						$value += 2;
						$compteur++;
						break;
					case "mecon":
						$value += 1;
						$compteur++;
						break;
					case "tmecon":
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
			echo "<div id='description'>";
			echo "<br><fieldset>";
			echo "<legend>"."Résultats pour l'ue ".$ue."</legend>";
			echo $x["tsatis"]." Très satisfait<br>";
			echo $x["satis"]." Satisfait<br>";
			echo $x["meh"]." Moyen<br>";
			echo $x["mecon"]." Mécontent<br>";
			echo $x["tmecon"]." Très mécontent<br>";
			echo "<br>";
			print_r("Dans l'ensemble, les élèves sont ". dechiffrer(moyenne($x)) .".<br>");
			print_r("L'écart-type est de  ". ecart_type($x));
			echo "</fieldset><br>";
			echo "</div>";
			}
		
		
		
		$ue="";
		
		$notes_maths = array(
			"tsatis" => 0,
			"satis" => 0,
			"meh" => 0,
			"mecon" => 0,
			"tmecon" => 0,
			);
			
		$notes_anglais = array(
			"tsatis" => 0,
			"satis" => 0,
			"meh" => 0,
			"mecon" => 0,
			"tmecon" => 0,
			);
		
		$notes_prog = array(
			"tsatis" => 0,
			"satis" => 0,
			"meh" => 0,
			"mecon" => 0,
			"tmecon" => 0,
			);
		
		$notes_algo = array(
			"tsatis" => 0,
			"satis" => 0,
			"meh" => 0,
			"mecon" => 0,
			"tmecon" => 0,
			);
			
		$notes_eco = array(
			"tsatis" => 0,
			"satis" => 0,
			"meh" => 0,
			"mecon" => 0,
			"tmecon" => 0,
			);

		
		$lesVotes = array(
			"maths" => $notes_maths,
			"anglais" => $notes_anglais,
			"prog" => $notes_prog,
			"algo" => $notes_algo,
			"eco" => $notes_eco,
			);
		
		
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
						

							$ue="maths";
							switch($t[0])
								{
								case 'tsatis':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_tsatis += 1;
									break;
								case 'satis':
									$lesVotes[$ue]["$t[0]"] += 1;
									$satis_satis += 1;
									break;
								case 'meh':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_meh += 1;
									break;
								case 'mecon':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$lesVotes[$ue]["$t[0]"] += 1;
									$compt_tmecon += 1;
									break;
								}
						

							$ue="anglais";
							switch($t[1])
								{
								case 'tsatis':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_tsatis += 1;
									break;
								case 'satis':
									$lesVotes[$ue]["$t[1]"] += 1;
									$satis_satis += 1;
									break;
								case 'meh':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_meh += 1;
									break;
								case 'mecon':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$lesVotes[$ue]["$t[1]"] += 1;
									$compt_tmecon += 1;
									break;
								}

							
							$ue="prog";
							switch($t[2])
								{
								case 'tsatis':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_tsatis += 1;
									break;
								case 'satis':
									$lesVotes[$ue]["$t[2]"] += 1;
									$satis_satis += 1;
									break;
								case 'meh':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_meh += 1;
									break;
								case 'mecon':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$lesVotes[$ue]["$t[2]"] += 1;
									$compt_tmecon += 1;
									break;
								}
						

							$ue="algo";
							switch($t[3])
								{
								case 'tsatis':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_tsatis += 1;
									break;
								case 'satis':
									$lesVotes[$ue]["$t[3]"] += 1;
									$satis_satis += 1;
									break;
								case 'meh':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_meh += 1;
									break;
								case 'mecon':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$lesVotes[$ue]["$t[3]"] += 1;
									$compt_tmecon += 1;
									break;
								}

						
							$ue="eco";
							switch($t[4])
								{
								case 'tsatis':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_tsatis += 1;
									break;
								case 'satis':
									$lesVotes[$ue]["$t[4]"] += 1;
									$satis_satis += 1;
									break;
								case 'meh':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_meh += 1;
									break;
								case 'mecon':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_mecon += 1;
									break;
								case 'tmecon':
									$lesVotes[$ue]["$t[4]"] += 1;
									$compt_tmecon += 1;
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
			display_ue($matiere, $nom);
			}
		
		
	?>
	
</body>
</html>