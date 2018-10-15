<?php

$file="data.csv";

echo"<form method='post' /> 
Nom : <input type='text' name='nom' value =''/><br>
Prenom : <input type='text' name='prenom' value =''/><br>
Profil : <input type='text' name='profil' value =''/><br>
<input type ='submit'name='ecriture' value='ecrire'/><br></form>";

if((!empty($_POST["nom"]))&& (!empty($_POST["prenom"]))&& (!empty($_POST["profil"])))
	if(isset($_POST["ecriture"])){

		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$profil = $_POST["profil"];
		$ligne = array($nom, $prenom, $profil);
		$pointeur = fopen($file,"a");
		fputcsv($pointeur, $ligne, ",");
		fclose($pointeur);
}


if (file_exists($file)){
$pointeur = fopen($file,"r");
$i = 0;
echo "<table border=1 cellpading='5'>";
while(!feof($pointeur)){
	$tabdata[$i]=fgetcsv($pointeur, 1024, ",");
	foreach ($tabdata as $values)
		echo"<tr>";
		foreach($values as $v)
			if($v == "nom" || $v =="prenom" || $v =="profil"){
			echo"<th>$v</th>";				
			}
			else{
				echo"<td>$v</td>";
				
			}
			echo"</tr>";
}
 echo"</table>";
} else {
	$pointeur=fopen($file,"w");
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$profil = $_POST["profil"];
	$ligne = array($nom, $prenom, $profil);
	$pointeur = fopen($file,"a");
	fputcsv($poineur, $ligne, ",");
	fclose($pointeur);
}
 


?>