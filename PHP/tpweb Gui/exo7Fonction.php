<?php
function calcul($C, $t, $n){
$M = ($C*$t/12)/(1-pow(1+$t/12, -$n));
return $M;
}

echo calcul(300000, 0.032,12*20)

?>