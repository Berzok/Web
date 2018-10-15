<?php
function maj($chaine){
	$patern = '/\A[A-Z]/';
	#\A demande le premier caractère, [A-Z] demande un caractère entre les deux maj
	return preg_match($patern, $chaine);
	#retourne 1 si vrai, 0 sinon
}

function dato($chaine){
	$patern = "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/";
	#/^ début de ligne, $/fin de ligne, | ou, [a-z]pour faire un intervalle entre a et z,
	#a{5} pour avoir exactement 5 a, a{5,} pour avoir 5 a ou plus
	#pas d'espaces dans le patern
 	return preg_match($patern, $chaine);
}
function email($chaine){
	$patern = "/^[a-zA-Z0-9]{1,}@[a-zA-Z0-9]{1,}[.][a-zA-Z0-9]{1,3}$/";
	return preg_match($patern, $chaine);
}

echo maj("Oui");
echo dato("2012-09-12");
echo email("blabla@truc.fr");
?>