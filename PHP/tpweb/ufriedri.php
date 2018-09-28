<HTML>
<h1>Test Numéro 1</h1>
<br>
<h2>Ugo Friedrich</h2>


<table border="1">
	<?php
	
	function  findP($x)
		{
		foreach($x as $v)
			{
			foreach($v as $w)
				{
				$bc = $w[1] and $w[2];
				$ac = $w[0] and $w[2];
				$ab = $w[0] and !$w[1];
				$a = $ab or $ac;
				$p = $a or $bc;
				return array($p);
				}
			}
		}
	
	
	define('T',TRUE);
	define('F',FALSE);
	$tableau = array(
		0=>array(F,F,F),
		1=>array(F,F,T),
		2=>array(F,T,F),
		3=>array(F,T,T),
		4=>array(T,F,F),
		5=>array(T,F,T),
		6=>array(T,T,F),
		7=>array(T,T,T)
		);
	
	
	$azerty = array("a", "b", "c", "p");
	$resultat = findP($tableau);
	$NbrLigne = count($tableau);
	$NbrCol = count($azerty);
		
		foreach($azerty as $value)
			{
			echo "<th>".$value."</th>";
			}
		echo "<tr></tr>";
		foreach($tableau as $v)
			{
			foreach($v as $value)
				{
				if($value===TRUE)
					{
					echo "<td>1</td>";
					}
				if($value===FALSE)
					{
					echo "<td>0</td>";
					}
				}
			echo "<tr></tr>";
			}
			
		
		
		
		
		?>
</HTML>