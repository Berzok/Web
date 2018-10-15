<?php


function checkref($chaine){
	$patern = "/^ref-([1-9]{3}-#[a-z]{1,3}$/";
	#/^ début de ligne, $/fin de ligne, | ou, [a-z]pour faire un intervalle entre a et z,
	#a{5} pour avoir exactement 5 a, a{5,} pour avoir 5 a ou plus
	#pas d'espaces dans le patern
 	return preg_match($patern, $chaine);
}

$file="datatest.csv";

echo "<th>Kaczmarek Guillaume</th>";

echo"<td><form method='post' /> 
Domaine : <input type='text' name='domaine' value =''/><br>

Extention : <input type='checkbox' name='extention' value ='ext'/><label for='ext'>fr</label>
<input type='checkbox' name='extension2' value ='ext2'/><label for='ext2'>com</label><br>

Reference : <input type='text' name='reference' value =''/><br>
<input type ='submit'name='Valider' value='Valider'/><br></form>
<td>";

if((!empty($_POST["domaine"]))&& ((!empty($_POST["extension"]))||(!empty($_POST["extension2"])))&& (!empty($_POST["reference"])))
	if(isset($_POST["Valider"])){
		echo"test1";
		$domaine = $_POST["domaine"];
		if(empty($_POST["extension"])){
			$extension = $_POST["extension"];
			echo"test2";
		}
		else{
			$extension = $_POST["extension2"];
			echo"test3";
		}
		if(checkref($_POST["reference"])){
			$reference = $_POST["reference"];
			$ligne = array($domaine, $extension, $reference);
			echo"$ligne";
		}
		else{
			echo"Tous les champs doivent être complétés:";	
		}
	}
else{
	echo"Tous les champs doivent être complétés:";
}




?>