<HTML>
<h1>Expressions Régulières</h1>
<br>
<?php
function print_dbg($x)
    {
    echo "<pre>";
    print_r($x);
    echo "</pre>";
      }

function majuscule($x)
	{
	$lesMajuscules = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$majuscules = str_split($lesMajuscules);
	foreach($majuscules as $lettre)
		{
		if(strpos($x, $lettre)!==false)
			{
			echo "Chaîne correcte.";
			}
		}
	}

function laDate($x)
	{
	
	}

echo "<h3>Une phrase commence par une majuscule.</h3>";
$chainedecaracteres = "To be or not to be.";
majuscule($chainedecaracteres);

echo "<h3>Une date s'écrit JJ/MM/AAAA</h3>";
$unedate = "13/04/2009";

echo "<h3>La chaîne est un email, Harry</h3>";
?>
</HTML>