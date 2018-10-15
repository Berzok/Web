<?php
session_start();

$_SESSION["login"]="admin";
$_SESSION["mdp"]="mdp";

if(isset($_POST["Connexion"])){
	if((!empty($_POST["login"]))&& (!empty($_POST["mdp"]))){
		$login = $_POST["login"];
		$mdp = $_POST["mdp"];
	}
}
else{
	echo"Pas d'id de connexion";
}

if(isset($_SESSION)){
	if(($_POST["login"]==$_SESSION["login"]) && ($_POST["mdp"]==$_SESSION["mdp"]))
		header("Location: Bienvenue.html");
	
	else{
		echo"login et/ou mot de passe incorrect";
	}
}



session_destroy();
unset($_SESSION);
?>

<HTML>
<form method='post' /> 
Login : <input type='text' name='login' value =''/><br>
Mot de passe : <input type='text' name='mdp' value =''/><br>
<input type ='submit'name='connexion' value='Connexion'/><br></form>
</HTML>



