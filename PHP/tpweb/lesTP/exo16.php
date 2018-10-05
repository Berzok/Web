<HTML>
<h1>Récupération des paramètres d'un formulaire déporté</h1>
	<head>
		<title>Formulaires HTML</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" />
	<head>
	
	<body>
		<form method="get" action="action.php">
			<fieldset id="section-1">
                <legend>Informations personnelles :</legend>
                
				<label for="pseudo">Login :</label>
                <input type="text" name="pseudo" id="pseudo"><br>
                
				<label for="nom">Entrez votre nom :</label>
                <input type="text" name="nom" id="nom"><br>
                
				<label for="mail">Adresse mail :</label>
                <input type="email" name="mail" id="mail"><br>
				
           </fieldset>
<!-- 			<label for="password">Entrez votre mot de passe: </label>		
			<input type="pswd" name="pswd" id="pswd"><br><br> -->

		<!-- 	<label for="naissance">Votre date de naissance: </label>		
			<input type="date" name="naissance" id="naissance"><br><br> -->
			
			<!-- <label for="mail">Votre e-mail: </label>		
			<input type="email" name="mail" id="mail"><br><br> -->
			
			<!-- <label for="url">URL de votre site: </label>		
			<input type="url" name="url" id="url"><br><br> -->
			
<!-- 			<label for="number">Entrez un nombre: </label>		
			<input type="number" name="url" id="number"><br><br> -->
			
		
			
			<input type="submit" value="Envoyer">
		</form>
	</body>
</html>
