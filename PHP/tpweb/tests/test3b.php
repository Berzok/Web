<html>
<head>
	<link rel='stylesheet' type='text/css' href='onestyle.css' />
</head>
<div id='content'>
<h1>Test 3</h1>
<h2>Friedrich Ugo</h2>
<hr>

<div id='gauche'><h4>Sélection pour affichage</h4>
	<fieldset><legend> Sélection </legend><form action='' method='post'>
		<select name='nom'>
			<option>etud01</option>
			<option>etud02</option>
			<option>etud03</option>
			<option>etud04</option>
			<option>etud05</option>
			<option>etud06</option>
			<option>etud07</option>
			<option>etud08</option>
			<option>etud09</option>
			<option>etud10</option>
			<option>etud11</option>
			<option>toto</option>
			<option>ee</option>
			<option>ee</option>
		</select><input type='submit' name='ok' value='OK'></form>
	</fieldset>

<h4>Ajout d'un étudiant</h4>
<fieldset><legend>Ajout</legend>
	<form action='' method='post'>
		<table>
			<tr>
				<td>Nom :</td>
				<td><input type='text' maxsize='10' name='nom' required></td>
			</tr>
			
			<tr>
				<td>Ue 1 :</td>
				<td><input type='text' maxsize='10' name='ue1'>
				</td>
			</tr>
			
			<tr>
				<td>Ue 2 :</td>
				<td><input type='text' maxsize='10' name='ue2'></td>
			</tr>
			
			<tr>
				<td>Ue 3:</td>
				<td><input type='text' maxsize='10' name='ue3'></td>
			</tr>
			
			<tr>
				<td>Ue 4:</td>
				<td><input type='text' maxsize='10' name='ue4'></td>
			</tr>
			
			<tr>
				<td>Groupe :</td>
				<td><input type='text' maxsize='10' name='gp'>
			</td>
			</tr>
			
			<tr>
				<td>Semestre :</td>
				<td><input type='text' maxsize='10' name='sem'></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td><input type='submit' name='plus' value='Ajouter'></td>
			</tr>
		
		</table>
	</form>
</fieldset></div></table></div></div>



<?php

	
	
	
	
	
	#On vérifie que les champs sont remplis	
	if(isset($_POST["nom"]))
		{
		$leNom = $_POST["nom"];
		}
	if(isset($_POST["ue1"]))
		{
		$ue1 = $_POST["ue1"];
		}
	if(isset($_POST["ue2"]))
		{
		$ue2 = $_POST["ue2"];
		}
	if(isset($_POST["ue3"]))
		{
		$ue3 = $_POST["ue3"];
		}
	if(isset($_POST["ue4"]))
		{
		$ue4 = $_POST["ue4"];
		}
	if(isset($_POST["gp"]))
		{
		$leGroupe = $_POST["gp"];
		}
	if(isset($_POST["sem"]))
		{
		$leSemestre = $_POST["sem"];
		}
	
	
	$file = "testb3.csv";
	$tableau = new ArrayObject();
	
	#Impossible d'ouvrir le pointeur du fichier
	$pointeur = fopen($file, "r");
	print_r(fgetcsv($pointeur, ","));
	
		while (!feof($pointeur))
		{
		$tableau->append(fgetcsv($pointeur, ","));
		}
		
	foreach($tableau as $v)
		{
		echo "<td>".$value."</td>";
		}
		echo "<tr></tr>";
	
	
	
	
?>

</html>









