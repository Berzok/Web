<?php
$azerty1 = array(2,5,7,10,20,21,22,23,24,25,30);
$azerty2 = array(1.5,2,2.5,3,3.5,4,7,8,5,4,12);
$azerty = array("an" => $azerty1,"taux" => $azerty2);
/*
echo "<pre>";
print_r($azerty);
echo "</pre>";
*/
echo "<table border=1 cellpading='5'>";
foreach($azerty as $key => $array){
	echo "<tr>";
	echo "<th>$key</th>";
	
	foreach($array as $value){
		echo "<td>$value</td>";
	}
	echo "</tr>";
}
echo "</table>";

function controle()






?>