<?php
$file="test3b.csv";

if((!empty($_POST["ue1"]))&& (!empty($_POST["ue2"]))&& (!empty($_POST["ue3"]))&& (!empty($_POST["ue4"]))
	&& (!empty($_POST["groupe"]))&& (!empty($_POST["semestre"])))
	if(isset($_POST["ajouter"])){
		$nom = $_POST["nom"];
		$ue1 = $_POST["ue1"];
		$ue2 = $_POST["ue2"];
		$ue3 = $_POST["ue3"];
		$ue4 = $_POST["ue4"];
		$groupe = $_POST["groupe"];
		$semestre = $_POST["semestre"];
		$ligne = array($nom, $ue1, $ue2, $ue3, $ue4, $groupe, $semestre);
		$pointeur = fopen($file,"a");
		fputcsv($pointeur, $ligne, ",");
		fclose($pointeur);
	}
	
if (file_exists($file)){
	if(isset($_POST["ok"])){
		$pointeur = fopen($file,"r");
		$i = 0;
		echo "<table border=1 cellpading='5'>";
		while(!feof($pointeur)){
			$tabdata[$i]=fgetcsv($pointeur, 1024, ",");
			foreach ($tabdata as $values)
			echo"<tr>";
				foreach($values as $v)
					if($v == "nom" || $v =="ue1" || $v =="ue2"|| $v =="ue3"|| $v =="ue4"
					|| $v =="groupe"|| $v =="semestre"){
						echo"<th>$v</th>";				
					}
					else{
						echo"<td>$v</td>";
				
					}
		}
		echo"</tr>";
		fclose($pointeur);
	}
}

?>

<HTML>
<form method='post' />
<h1>Sélection</h1><br>
<input type='checkbox' name='selection' value ='etud01'/><label for='etud01'>etud01</label>

<input type='checkbox' name='etu02' value ='etu02'/><label for='etu02'>etu02</label>

<input type ='submit'name='ok' value='ok'/><br><br>

<h1>Ajout d'un étudiant</h1><br>

Nom : <input type='text' name='nom' value =''/><br>

UE 1 : <input type='text' name='ue1' value =''/><br>

<td><form method='post' /> 
UE 2 : <input type='text' name='ue2' value =''/><br>

<td><form method='post' /> 
UE 3 : <input type='text' name='ue3' value =''/><br>

<td><form method='post' /> 
UE 4 : <input type='text' name='ue4' value =''/><br>

<td><form method='post' /> 
Groupe : <input type='text' name='groupe' value =''/><br>

<td><form method='post' /> 
Semestre : <input type='text' name='semestre' value =''/><br>

<input type ='submit'name='ajouter' value='ajouter'/>

</form>

</HTML>