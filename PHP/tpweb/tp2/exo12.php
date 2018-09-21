<HTML>
<h1>Tableau et fonctions mathématiques</h1>
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
		
		function avg($x)
			{
			$somme = 0;
			foreach($x as $value)
				{
				$somme = $somme + $value;
				}
			$moyenne = $somme/count($x);
			return $moyenne;
			}
		
		function covariance($x)
			{
			
			foreach($x as $key => $value)
				{
				
				}
			}
		
		
		echo "Moyenne An: ".avg($azerty1)."<br>";
		echo "Moyenne Taux: ".avg($azerty2)."<br></br>";
		
		echo "Max An: ".max($azerty1)."<br>";
		echo "Man An: ".min($azerty1)."<br>";
		echo "Max Taux: ".max($azerty2)."<br>";
		echo "Min Taux: ".min($azerty2)."<br></br>";
		
		echo "Covariance An: ".stats_covariance($azerty1, $azerty2)."<br></br>";
		
		
		
		?>
</HTML>