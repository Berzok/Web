<?php
session_start();
?>
<HTML>
<h1>Bienvenue <?php$_SESSION['login']?></h1>
<br>



<hr><fieldset><legend> Connect� </legend><table width='300'><form name='Demande' action='' method='post'<tr>
      Hello admin, �a va?<br></br>
		<input name='ok' type='submit' value='Deconnexion'>
		</td>

		
		

<?php
	
	if(isset($_POST["ok"]))
		{
		if(!empty($_POST["ok"]))
			{
			if($_POST['ok'])
				{
				header('location: exo29.php');
				exit();
				}
			}
		}
	
	
	
	
	
?>



</HTML>