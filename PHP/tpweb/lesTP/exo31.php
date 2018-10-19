<?php
	session_start();
?>
<html>
<head>
	<title>Formulaires HTML</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" />
<title>Gestionnaire de clientèle</title>
</head>

<body>
<h1>Accueil Intranet Gestion Clientèle</h1></hr/>
	<form method="get" action="exo31_redirect.php">
		<fieldset id="section-1">
            <legend>Informations personnelles :</legend>
   				<label for="pseudo">Login :</label>
                <input type="text" name="login" id="login"><br>
                
				<label for="mdp">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp"><br>
		</fieldset>
		
			
		<input type="submit" value="Envoyer">
		</form>
		<p>Pas de compte ? On ne peut rien faire pour vous dans ce cas, désolé!</p>
	</body>
</html>

</body>
</html>