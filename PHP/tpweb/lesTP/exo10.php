<HTML>
<h1>Manipuler des Dates</h1>
<br>
<?php

function print_dbg($x)
    {
    echo "<pre>";
    print_r($x);
    echo "</pre>";
      }




echo "<h3>La fonction checkdate().</h3>";
echo "Il s'agit de donner une date, non en retard units, et cette fonction la valide ou non.<br></br>";

echo "<h3>La fonction date()</h3>";
echo "Cette fonction renverra par d�faut la date actuelle en tant que string, avec un format d�pendant du premier param�tre donn�.<br></br>";

echo "<h3>La fonction strftime()</h3>";
echo "M�me utilit� que la fonction date(), mais renvoie par la date au format par d�faut local.<br></br>";

echo "<h3>La fonction getdate()</h3>";
echo "Renvoie la date actuelle en tant qu'array.<br></br>";

echo "<h3>La fonction time()</h3>";
echo "Renvoie le temps �coul� dep8s le d�but d'UNIX, c'est-�-dire le 1er Janvier 1970 � 00:00:00.<br></br>";
echo "".time()."s"

?>
</HTML>