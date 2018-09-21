<HTML>
<h1>Conjecture de Syracuse</h1>
<?php
$i=42;
while ($i !=1)
{
	if($i%2===0)
	{
	$i = $i /2;	
	}
	else {$i = $i*3 + 1;}
}
echo "la valeur est : <b>".$i."<b/>";
?>
</HTML>