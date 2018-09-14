<HTML>
<h1>Calcul du PGCD</h1>

<?php
$i=2520;
$j=2970;
while ($j !=0)
	{
	$k = $i % $j;
	$i=$j;
	$j=$k;
	}
echo "la valeur est : <b>".$i."<b/>";
?>
</HTML>