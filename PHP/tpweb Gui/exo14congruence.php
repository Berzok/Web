<?php

$file="data.csv";

echo"<form method='post' /> 
Valeur : <input type='valeur' name='valeur' value =''/><br>
<input type ='submit'name='ecriture' value='ecrire'/><br></form>";

if(!empty($_POST["valeur"]))
	if(isset($_POST["ecriture"])){
		$valeur = $_POST["valeur"];
		$pointeur = fopen($file,"a");
		fputcsv($pointeur, $ligne, ",");
		fclose($pointeur);
}


?>