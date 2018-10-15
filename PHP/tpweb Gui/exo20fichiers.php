<?php

$file="data.csv";

 
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

?>