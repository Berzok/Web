<?php
	session_start();
	
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

	$tables="userlist"; //à faire
	//requete sql de type SELECT ... from

	//requete passee dans la commande  mysql_query
	
	$userlogin = array();
	$userpassword = array();
	
	//affichage du resultat utilisation de la commande mysql_fetch_row
	
	
	$requete="SELECT id FROM $tables";
	$resultat=mysqli_query($connexion,$requete);
	while ($ligne=mysqli_fetch_row($resultat))
		{
		echo "<pre>";
		array_push($userlogin, $ligne);
		echo "</pre>";
		}
	
	$requete="SELECT password FROM $tables";
	$resultat=mysqli_query($connexion,$requete);
	while ($ligne=mysqli_fetch_row($resultat))
		{
		echo "<pre>";
		array_push($userpassword, $ligne);
		echo "</pre>";
		}
	
	
	
		
		
	// d'autres fetch
	//mysqli_fetch_array
	//mysqli_fetch_assoc

	//fermeture
	mysqli_close($connexion);
	
	if(isset($_GET["login"], $_GET["mdp"]))
		{
		if(!empty($_GET["login"]) and !empty($_GET["mdp"]))
			{
			$login=$_GET["login"];
			$mdp=$_GET["mdp"];
			if($login == "admin" && $mdp == "password")
				{
				header('Location: exo31_admin.php');
				}
			for($i = 0; $i < count($userlogin); $i++)
				{
				if(in_array($login, $userlogin[$i]) and in_array($mdp, $userpassword[$i]))
					{
					header('Location: exo31_user.php');
					}
				}
			}
		}
?>