<?php
?>

<HTML>
<h1>Bienvenue étudiant</h1>
<p>Ici, vous pouvez voter pour chaque UE que vous avez suivi. Vos notes seront prises en compte par les professeurs concernés.</p>

<form method= "POST" action="traitement.php">

<fieldset>
    <legend>Math</legend>

		<input type="radio" name="math" value="tres_mecontenttent" required> Très mécontent<br>
		<input type="radio" name="math" value="mecontenttent"> Mécontent<br>
		<input type="radio" name="math" value="mitige"> Mitigé<br>
		<input type="radio" name="math" value="satisfait"> Satisfait<br>
		<input type="radio" name="math" value="tres_satisfait"> Très satisfait<br>

</fieldset>


<br></br>


<fieldset>
    <legend>Anglais</legend>

		<input type="radio" name="anglais" value="tres_mecontenttent" required> Très mécontent<br>
		<input type="radio" name="anglais" value="mecontenttent"> Mécontent<br>
		<input type="radio" name="anglais" value="mitige"> Mitigé<br>
		<input type="radio" name="anglais" value="satisfait"> Satisfait<br>
		<input type="radio" name="anglais" value="tres_satisfait"> Très satisfait<br>


</fieldset>


<br></br>


<fieldset>
    <legend>Prog</legend>

		<input type="radio" name="prog" value="tres_mecontenttent" required> Très mécontent<br>
		<input type="radio" name="prog" value="mecontent"> Mécontent<br>
		<input type="radio" name="prog" value="mitige"> Mitigé<br>
		<input type="radio" name="prog" value="satisfait"> Satisfait<br>
		<input type="radio" name="prog" value="tres_satisfait"> Très satisfait<br>

</fieldset>


<br></br>


<fieldset>
    <legend>Algo</legend>
	
		<input type="radio" name="algo" value="tres_mecontenttent" required> Très mécontent<br>
		<input type="radio" name="algo" value="mecontent"> Mécontent<br>
		<input type="radio" name="algo" value="mitige"> Mitigé<br>
		<input type="radio" name="algo" value="satisfait"> Satisfait<br>
		<input type="radio" name="algo" value="tres_satisfait"> Très satisfait<br>

</fieldset>


<br></br>



<fieldset>
    <legend>Economie</legend>

		<input type="radio" name="eco" value="tres_mecontenttent" required> Très mécontent<br>
		<input type="radio" name="eco" value="mecontent"> Mécontent<br>
		<input type="radio" name="eco" value="mitige"> Mitigé<br>
		<input type="radio" name="eco" value="satisfait"> Satisfait<br>
		<input type="radio" name="eco" value="tres_satisfait"> Très satisfait<br>

</fieldset>
<br><br>	
<input type="submit" value="Envoyer" />
<br><br>
</form>

</HTML>