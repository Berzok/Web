<h1>Test 2</h1>

<h2>Friedrich Ugo</h2>


</ul>
<hr><fieldset><legend> formulaire </legend><table width='300'><form name='Demande' action='' method='post'<tr>
      <td>Domaine  </td>
	  <td><input name='nom' type='text' /></td>
	  </tr><tr>
	  <td>Extension</td><td>
      <select name='ext'>
			<option value='fr' checked>fr</option>
			<option value='net'>net</option>
			<option value='com'>com</option>
			<option value='org'>org</option>
		</select>
		</td></tr>
		<tr><td>Reférence</td>
			<td><input name='ref' type='text'></td>
		</tr><tr>
		
		<td>
		<input name='ok' type='submit' value='Valider'>
		</td>
		
		<td></td></tr><input type='hidden' name='secret' value='test2'/></form></table></fieldset><hr />
		
		

<?php
	
	function verify($x)
		{
		if(empty($x))
			{
			return false;
			}
		else
			{
			return true;
			}
		}
	
	
	function refCheck($x)
		{
		if(strpos($x, "-") === 3)
			{
			$y = explode("-", $x);
			$z = explode("#", $y[1]);	
			if($y[0] === "ref")
				{
					{
					return true;
					}
				}
			}
		return false;
		}
	
	
		
	$leDomaine = $_POST["nom"];
	$lExtension = $_POST["ext"];	
	$laReference = $_POST["ref"];
	
	
	//On vérifie que les champ ont bien été remplis par l'utilisateur
	
	if(!verify($leDomaine))
		{
		echo "Données non conformes.";
		die();
		}
	if(!verify($lExtension))
		{
		echo "Données non conformes.";
		die();
		}
	if(!verify($laReference))
		{
		echo "Données non conformes.";
		die();
		}
	
	if(!refCheck($laReference))
		{
		echo "Données non conformes.";
		die();
		}
	
	echo "Votre choix est ".$leDomaine.$lExtension.", et votre référence est ".$laReference;
	

?>






