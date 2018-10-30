<?php

	session_start();
?>
<HTML>
<h1> CHTEMEULE </h1>
</html>



<?php
	
	$file = "votes/vote-";
	
	$login = $_SESSION["login"];
	$maths = $_POST["math"];
	$anglais = $_POST["anglais"];
	$prog = $_POST["prog"];
	$algo = $_POST["algo"];
	$eco = $_POST["eco"];
	
	if((isset($_SESSION["login"])) or isset($_SESSION["role"]))
		{
		if(isset($_POST["envoi"]))
			{
			$file .= $login;
			$file .= ".csv";
			$ligne = array($maths, $anglais, $prog, $algo, $eco);
			$pointeur = fopen($file,"a");
			fputcsv($pointeur, $ligne, ",");
			fclose($pointeur);
			}
		}
	
	
	
	
?>