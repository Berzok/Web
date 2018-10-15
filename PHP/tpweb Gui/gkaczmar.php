<?php

define('T',TRUE);
define('F',FALSE);

function p($val){
	if ($val[0]==TRUE && $val[2]==FALSE) || ($val[0]==TRUE && $val[2]==TRUE) || ($val[1]==TRUE  && $val[2]==TRUE))
		$val[3]=TRUE;
	else
		$val[3]=FAlSE;
	return $val[3];
}

$valeurs = array(
	0=>array(F,F,F),
	1=>array(F,F,T),
	2=>array(F,T,F),
	3=>array(F,T,T),
	4=>array(T,F,F),
	5=>array(T,F,T),
	6=>array(T,T,F),
	7=>array(T,T,T)
);
foreach($valeurs as $t)
	$valeurs[3] = p($t);
$lettre = array(a, b, c, p);

echo "<table border=1 cellpading='5'>";
foreach($lettre as $k)
	echo"<td><th>$k</th></td>";
foreach($valeurs as $key =>$values){
	echo "<tr>";
	//echo "<th>$key</th>";
	
	foreach($values as $v){
		echo "<td>$v</td>";
	}	
	echo "</tr>";
}
echo "</table>";





?>