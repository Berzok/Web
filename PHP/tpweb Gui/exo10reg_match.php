<?php
echo checkdate(12, 20, 12);
#renvoie un booléen pour vérifier la validité de la date
echo date("l j F Y h:i:s"),"<br>";
#affiche la date, attends au moins un paramètre pour le format, peut avoir un deuxième argument pour donner une date
#précise, sinon date courante par défaut
#ici affichage : l jour, j le numéros, F le mois, Y l'année

setlocale(LC_TIME,"en_EN");
echo strftime("aux USA c'est %A %d %Y"),"<br>";
#comme date mais permet de donner la date dans un lieu fixé par setlocale

$today = getdate();
print_r($today); echo"<br>";
#donne un tableau associatif qui donn date, heure etc... du timestamp founrnis en argument ou courante par défaut

echo time(),"<br>";
#renvoie le nombre de secondes depuis la création d'UNIX
?>