<?php
echo checkdate(12, 20, 12);
#renvoie un bool�en pour v�rifier la validit� de la date
echo date("l j F Y h:i:s"),"<br>";
#affiche la date, attends au moins un param�tre pour le format, peut avoir un deuxi�me argument pour donner une date
#pr�cise, sinon date courante par d�faut
#ici affichage : l jour, j le num�ros, F le mois, Y l'ann�e

setlocale(LC_TIME,"en_EN");
echo strftime("aux USA c'est %A %d %Y"),"<br>";
#comme date mais permet de donner la date dans un lieu fix� par setlocale

$today = getdate();
print_r($today); echo"<br>";
#donne un tableau associatif qui donn date, heure etc... du timestamp founrnis en argument ou courante par d�faut

echo time(),"<br>";
#renvoie le nombre de secondes depuis la cr�ation d'UNIX
?>