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

$average = array_sum($azerty1)/count($azerty1);
echo "La moyenne de la première série est de : ", $average,"<br>";

echo "Le max de la première série est de :", max($azerty1),"<br>";

echo "Le min de la première série est de :", min($azerty1),"<br>";

function covariance($liste1, $liste2){
	$average1 = array_sum($liste1)/count($liste1);
	$average2 = array_sum($liste2)/count($liste2);
}
?>