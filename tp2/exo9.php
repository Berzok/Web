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
			echo "Chaîne correcte.</br>";
			}
		}
	echo "<br>";
	}

function laDate($x)
	{
	$maDate = explode("/", $x);
	if($maDate[0]>1 and $maDate[0]<32)
		{
		if($maDate[1]>0 and $maDate[1]<13)
			{
			if($maDate[2]>-10000 and $maDate[2]<10000)
				{
				echo "Youpi.</br>";
				}
			}
		}
	else
		{
		echo "NON.";
		}
	echo "</br>";
	}

function leMail($x)
	{
	if (filter_var($x, FILTER_VALIDATE_EMAIL))
		{
		echo "Adresse mail valide.<br>";
		}
	else
		{
		echo "Adresse mail non valide.<br>";
		}
	}


echo "<h3>Une phrase commence par une majuscule.</h3>";
$chainedecaracteres = "To be or not to be.";
majuscule($chainedecaracteres);

echo "<h3>Une date s'écrit JJ/MM/AAAA</h3>";
$uneDate = "13/04/2009";
laDate($uneDate);

echo "<h3>La chaîne est un email, Harry</h3>";
$laChaîne = "jean.bon@pumpkin.org";
leMail($laChaîne);

?>
</HTML>