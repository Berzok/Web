<?php
	session_start();
?>
<html>
<head>
<title>Bienvenue Admin-senpai! How are you today?</title>
</head>

<body>
<h1>Opérations à faire sur les fiches clients</h1></hr/>

<h3>Entrez du code SQL</h3>
<fieldset><legend>Ajout</legend>
	<form action='' method='get'>
		<table>
			<tr>
				<td></td>
				<td>
					<textarea type='text' maxsize='100' name='code' required></textarea>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type='submit' name='plus' value='Exécution'></td>
			</tr>
		
		</table>
	</form>
</fieldset></div></table></div></div>
<?php
$serveur =  "127.0.0.1";
$login = "root";
$mdp = "";
$connexion=mysqli_connect($serveur,$login,$mdp) 
or die("Connexion impossible au serveur $serveur pour $login");


//nom de la base de donnees
$bd="canarticheau"; //à faire

//connexion à la base de donnees
mysqli_select_db($connexion,$bd)
or die("Impossible d'accéder à la base de données");

$tables="Hamster_Dame"; //à faire
$id = "";
$login = "";
$mdp = "";
$mail = "";

//liaison des parametres:
if(isset($_GET["code"]))
	if(!empty($_GET["code"]))
		{
		$requete=$_GET['code'];

		// connexion mysql, etc...
		$reqinsert = "INSERT into $tables(id, login, mdp, mail)";
		$reqinsert.= "VALUES(?,?,?,?)";

		$reqprepare=mysqli_prepare($connexion,$reqinsert);

		// insertion
		mysqli_stmt_bind_param($reqprepare,'ssss',$id,$login,$mdp,$mail);
		mysqli_stmt_execute($reqprepare);

		$laTable = "SELECT * FROM Hamster_Dame";
		$requete = mysqli_query($connexion, $laTable);
		}



?>
</body>
</html>