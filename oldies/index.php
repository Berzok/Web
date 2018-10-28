<?php

session_start();

setcookie("cookie", "php5");


?>
<HtMl>
<h1>Page de connexion</h1>
<br>



<hr><fieldset><legend> Connexion </legend><table width='300'><form name='Demande' action='' method='post'<tr>
      <td>Nom d'utilisateur  </td>
	  <td><input name='nom' type='text' required /></td>
	  </tr><tr>
	  <tr><td>Mot de passe</td>
			<td><input name='password' type='password' required ></td>
		</tr><tr>
		
		<td>
		<input name='ok' type='submit' value='Valider'>
		</td>

<?php

	$file="data/id-student.csv";

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

	

	if(isset($_POST["nom"]))
		{
		if(!empty($_POST["password"]))
			{
			$login = $_POST["nom"];
			$mdp = $_POST["password"];
			if($login === "admin" && $mdp === "admin")
				{
				$_SESSION['login'] = 'admin';
				header("Location: exo29b.php");
				}
			else
				{
				echo "Non.";
				}
			}
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