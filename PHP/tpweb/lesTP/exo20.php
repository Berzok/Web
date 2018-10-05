<HTML>
<h1>Fichier csv et affichage dans un tableau</h1>
<br>


<table border="1">
	<?php
	
	function print_dbg($x)
		{
		echo "<pre>";
		print_r($x);
		echo "</pre>";
		}
	
	
	
	$file="script05.csv";

	if (file_exists($file))
		{
		$pointeur=fopen($file,"a");
		fclose($pointeur);
		}
	else
		{
		$pointeur=fopen($file,"r");
		fclose($pointeur);
		}

	$i=0;
	$pointeur=fopen($file,"r");

	$tableau = new ArrayObject();
	
	while (!feof($pointeur))
		{
		$tableau->append(fgetcsv($pointeur, ","));
		}
		
	foreach($tableau as $v)
		{
		foreach($v as $value)
			{
			echo "<td>".$value."</td>";
			}
		echo "<tr></tr>";
		}
		echo "<tr></tr>";
		
		
		?>
</HTML>