<HTML>
<form method = "get" action="exo16action"/>
Username: <input type='text' name='username' value'' />
Passeword: <input type='text'name='passeword' value' />
<input type='submit' name='login' value='Login' />
</form>";
</HTML>
<?php
if(isset($_GET["message"])){
	if($_GET == "erreur"){
		echo "erreur"
	}
}
?>