<?php

if(($_GET["username"])=="admin" && $_GET["password"]=="admin")
	echo "bienvenue";
else
	header("Location=exo16formulaire.php?message=erreur");



?>