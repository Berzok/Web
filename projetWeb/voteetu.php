<html>
<body>
	<h1>Évaluation des enseigments</h1>
	<p id="description">Ici, vous pouvez voter pour chaque UE que vous avez suivi. Vos votes seront pris en compte par les professeurs concernés.</p>
	
	<br>

	<form method= "POST" action="traitement.php">
		<fieldset>
		    <legend>Mathématiques</legend>

				<input type="radio" name="math" value="tres_mecontent" required> Très mécontent<br>
				<input type="radio" name="math" value="mecontent"> Mécontent<br>
				<input type="radio" name="math" value="moyen"> Moyen<br>
				<input type="radio" name="math" value="satisfait"> Satisfait<br>
				<input type="radio" name="math" value="tres_satisfait"> Très satisfait<br>

		</fieldset>

		<fieldset>
		    <legend>Anglais</legend>

				<input type="radio" name="anglais" value="tres_mecontent" required> Très mécontent<br>
				<input type="radio" name="anglais" value="mecontent"> Mécontent<br>
				<input type="radio" name="anglais" value="moyen"> Moyen<br>
				<input type="radio" name="anglais" value="satisfait"> Satisfait<br>
				<input type="radio" name="anglais" value="tres_satisfait"> Très satisfait<br>


		</fieldset>

		<fieldset>
		    <legend>Programmation</legend>

				<input type="radio" name="prog" value="tres_mecontent" required> Très mécontent<br>
				<input type="radio" name="prog" value="mecontent"> Mécontent<br>
				<input type="radio" name="prog" value="moyen"> Moyen<br>
				<input type="radio" name="prog" value="satisfait"> Satisfait<br>
				<input type="radio" name="prog" value="tres_satisfait"> Très satisfait<br>

		</fieldset>

		<fieldset>
		    <legend>Algorithmique</legend>
			
				<input type="radio" name="algo" value="tres_mecontent" required> Très mécontent<br>
				<input type="radio" name="algo" value="mecontent"> Mécontent<br>
				<input type="radio" name="algo" value="moyen"> Moyen<br>
				<input type="radio" name="algo" value="satisfait"> Satisfait<br>
				<input type="radio" name="algo" value="tres_satisfait"> Très satisfait<br>

		</fieldset>

		<fieldset>
		    <legend>Economie</legend>

				<input type="radio" name="eco" value="tres_mecontent" required> Très mécontent<br/>
				<input type="radio" name="eco" value="mecontent"> Mécontent<br>
				<input type="radio" name="eco" value="moyen"> Moyen<br>
				<input type="radio" name="eco" value="satisfait"> Satisfait<br>
				<input type="radio" name="eco" value="tres_satisfait"> Très satisfait<br>
		</fieldset>
		<br>
		<input type="submit" value="Envoyer" name="envoi" />
		<br>
	</form>
</body>
</html>