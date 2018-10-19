<HTML>
<h1>Affichage d'un tableau</h1>
<br>


<table border="1">
	<?php
		$azerty1 = array(2,5,7,10,20,21,22,23,24,25,30);
		$azerty2 = array(1.5,2,2.5,3,3.5,4,7,8,5,4,12);
		$azerty = array("an" => $azerty1,"taux" => $azerty2);
		$NbrLigne = count($azerty1);
		$NbrCol = count($azerty2);
		
		foreach($azerty as $key => $value)
			{
			echo "<th>".$key."</th>";
			foreach($value as $v)
				{
				echo "<td>".$v."</td>";
				}
			echo "<tr></tr>";
			}
		
		
		echo "Autre exo";
		$a=True;$b=True;

		echo "\$a =".intval($a)." \$b=".intval($b)."<br>";
		for ($i=1;$i<4;$i++) {
			$aa=$a;
			$a=$b;
			$b=!$aa;
			echo "\$a =".intval($a)." \$b=".intval($b)."<br>";
}//for

		
		
		?>
</HTML>