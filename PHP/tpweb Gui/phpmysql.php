<html>
<head>
<title>Select et Insert MySQL</title>
</head>

<body>
<h1>Select et Insert MySQL</h1></hr/>
<?php

require("parametres.php");//à faire

//connexion au serveur mysql (ici localhost)
$connexion=mysqli_connect($serveur,$login,$mdp) 
or die("Connexion impossible au serveur $serveur pour $login");


//nom de la base de donnees
$bd="testtpweb"; //à faire

//connexion à la base de donnees
mysqli_select_db($connexion,$bd)
or die("Impossible d'accèder à la base de données");

$tables="exercice30"; //à faire
//requete sql de type SELECT ... from
$requete="SELECT * FROM $tables ORDER BY id";

//requete passee dans la commande  mysql_query
$resultat=mysqli_query($connexion,$requete);

?>
<?php
//affichage du resultat utilisation de la commande mysql_fetch_row
while ($ligne=mysqli_fetch_row($resultat)) {
echo "<pre>";
print_r($ligne);
echo "</pre>";
}
// d'autres fetch
//mysqli_fetch_array
//mysqli_fetch_assoc

//fermeture

?>
<h3>Formulaire d'insertion</h3>
<form method='post' />
ID : <input type='text' name='id' value =''/><br> 
Login : <input type='text' name='login' value =''/><br>
MDP : <input type='text' name='mdp' value =''/><br>
Mail : <input type='text' name='mail' value =''/><br>
<input type ='submit'name='ecriture' value='ecrire'/><br></form>
<!-- a faire -->

<?php
// connexion mysql, etc...
$reqinsert="INSERT into exercice30(id,login,mdp,mail)";
$reqinsert.="VALUES(?,?,?,?)";

$reqprepare=mysqli_prepare($connexion,$reqinsert);

//liaison des parametres :
//véifie que les paramètres sont rentrés par l'user et qu'ils ne sont pas vides
if(isset($_POST["id"],$_POST["login"],$_POST["mdp"],$_POST["mail"])&& 
(!empty($_POST["id"])&& !empty($_POST["login"])&&!empty($_POST["mdp"])&&!empty($_POST["mail"]))){
	$id=$_POST['id'];
	$login=$_POST['login'];
	$mdp=$_POST['mdp'];
	$mail=$_POST['mail'];
	// insertion
	mysqli_stmt_bind_param($reqprepare,'ssss',$id,$login,$mdp,$mail);
	mysqli_stmt_execute($reqprepare);
	}
	mysqli_close($connexion);
?>
</body>
</html>