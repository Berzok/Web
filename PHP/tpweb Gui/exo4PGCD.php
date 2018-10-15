<?php
$i=5;
$j=2;
$x=$i;
$y=$j;

while ($j !=0)
{
	$k = $i % $j;
	$i=$j;
	$j=$k;
}
echo "Le PGCD de ".$x." et ".$y." est  : <b>".$i."<b/>";
?>