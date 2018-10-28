<html>
<body>
	<h1>Évaluation des enseigments</h1>
	<p id="description">Ici, vous pouvez voter pour chaque UE que vous avez suivi. Vos votes seront pris en compte par les professeurs concernés.</p>
	
	<br>

	<form method= "POST" action="traitement.php">
		<fieldset>
		    <legend>Mathématiques</legend>

				<input type="radio" name="math" value="tmecon" required> Très mécontent<br>
				<input type="radio" name="math" value="mecon"> Mécontent<br>
				<input type="radio" name="math" value="meh"> Moyen<br>
				<input type="radio" name="math" value="satis"> Satisfait<br>
				<input type="radio" name="math" value="tsatis"> Très satisfait<br>

		</fieldset>

		<fieldset>
		    <legend>Anglais</legend>

				<input type="radio" name="anglais" value="tmecon" required> Très mécontent<br>
				<input type="radio" name="anglais" value="mecon"> Mécontent<br>
				<input type="radio" name="anglais" value="meh"> Moyen<br>
				<input type="radio" name="anglais" value="satis"> Satisfait<br>
				<input type="radio" name="anglais" value="tsatis"> Très satisfait<br>


		</fieldset>

		<fieldset>
		    <legend>Programmation</legend>

				<input type="radio" name="prog" value="tmecon" required> Très mécontent<br>
				<input type="radio" name="prog" value="mecon"> Mécontent<br>
				<input type="radio" name="prog" value="meh"> Moyen<br>
				<input type="radio" name="prog" value="satis"> Satisfait<br>
				<input type="radio" name="prog" value="tsatis"> Très satisfait<br>

		</fieldset>

		<fieldset>
		    <legend>Algorithmique</legend>
			
				<input type="radio" name="algo" value="tmecon" required> Très mécontent<br>
				<input type="radio" name="algo" value="mecon"> Mécontent<br>
				<input type="radio" name="algo" value="meh"> Moyen<br>
				<input type="radio" name="algo" value="satis"> Satisfait<br>
				<input type="radio" name="algo" value="tsatis"> Très satisfait<br>

		</fieldset>

		<fieldset>
		    <legend>Economie</legend>

				<input type="radio" name="eco" value="tmecon" required> Très mécontent<br/>
				<input type="radio" name="eco" value="mecon"> Mécontent<br>
				<input type="radio" name="eco" value="meh"> Moyen<br>
				<input type="radio" name="eco" value="satis"> Satisfait<br>
				<input type="radio" name="eco" value="tsatis"> Très satisfait<br>
		</fieldset>
		<br>
		<input type="submit" value="Envoyer" />
		<br>
	</form>
</body>
</html>