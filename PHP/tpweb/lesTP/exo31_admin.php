<html>
<head>
<title>Select et Insert MySQL</title>
</head>

<body>
<h1>Select et Insert MySQL</h1></hr/>
<?php

// require("parametres.php");//à faire

//connexion au serveur mysql (ici localhost)
$serveur =  "127.0.0.1";
$login = "root";
$mdp = "";
$connexion=mysqli_connect($serveur,$login,$mdp) 
or die("Connexion impossible au serveur $serveur pour $login");


//nom de la base de donnees
$bd="canarticheau"; //à faire

//connexion à la base de donnees
mysqli_select_db($connexion,$bd)
or die("Impossible d'accèder à la base de données");

$tables="Hamster_Dame"; //à faire
//requete sql de type SELECT ... from
$requete="SELECT * FROM $tables ORDER BY id";

//requete passee dans la commande  mysql_query
$resultat=mysqli_query($connexion,$requete);

?>
<?php
//affichage du resultat utilisation de la commande mysql_fetch_row
while ($ligne=mysqli_fetch_row($resultat))
	{
	echo "<pre>";
	print_r($ligne);
	echo "</pre>";
	}
// d'autres fetch
//mysqli_fetch_array
//mysqli_fetch_assoc

//fermeture
mysqli_close($connexion);
?>
<h3>Formulaire d'insertion</h3>
<fieldset><legend>Ajout</legend>
	<form action='' method='get'>
		<table>
			<tr>
				<td>ID :</td>
				<td><input type='text' maxsize='10' name='id' required></td>
			</tr>
			
			<tr>
				<td>Login :</td>
				<td><input type='text' maxsize='10' name='login'>
				</td>
			</tr>
			
			<tr>
				<td>Mot de passe :</td>
				<td><input type='password' maxsize='10' name='mdp'></td>
			</tr>
			
			<tr>
				<td>Mail:</td>
				<td><input type='text' maxsize='10' name='mail'></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td><input type='submit' name='plus' value='Ajouter'></td>
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
or die("Impossible d'accèder à la base de données");

$tables="Hamster_Dame"; //à faire
$id = "";
$login = "";
$mdp = "";
$mail = "";

//liaison des parametres:
if(isset($_GET["id"], $_GET["mail"], $_GET["login"], $_GET["mdp"], $_GET["mail"]))
	if(!empty($_GET["id"]) and !empty($_GET["mail"]) and !empty($_GET["login"]) and !empty($_GET["mdp"]) and !empty( $_GET["mail"]))
		{
		$id=$_GET['id'];
		$login=$_GET['login'];
		$mdp=$_GET['mdp'];
		$mail=$_GET["mail"];

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