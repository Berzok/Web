<HTML>
<h1>Emprunt avec banque</h1>
<?php
$c = 300000;
$t = 240;
$y = 0.032;
$v = ($c*($y/12))/(1-pow(1+($y/12), -$t));
echo "la valeur est : <b>".$v."<b/>";
?>
</HTML>