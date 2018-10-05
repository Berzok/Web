<HTML>
<h1>Stalemate</h1>
<?php
while ($i !=1)
{
	if($i%2===0)
	{
	$i = $i /2;	
	}
	else {$i = $i/3 + 1;}
}
echo "la valeur est : <b>".$i."<b/>";
?>
</HTML>