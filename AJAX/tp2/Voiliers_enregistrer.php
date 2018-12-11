

<?php





$nom = $_POST['nom'];
$classe = $_POST['classe'];
$construction = $_POST['construction'];
$photo = $_POST['photo'];
$architecte = $_POST['architecte'];
$longueur = $_POST['longueur'];
$nom_skipper = $_POST['nom_skipper'];
$description = $_POST['description'];


if (!file_exists("voiliers.xml")){
	// construction de la racine quand le fichier n’existe pas
	// le fichier XML construit possède alors la ligne de prologue et la racine
	$racine = new SimpleXMLElement ("<voiliers></voiliers>");
	}
	else {
	// lecture de la racine comme un element xml
	$racine = simplexml_load_file ($fname);
}

$voilier = $racine->addChild ("voilier");
$voilier->addAttribute("classe", $classe);
$voilier->addChild ("nom", $nom);

// suite des données sur le voilier...
fclose ($nfile);
$nfile = fopen($fname, "w");
fwrite ($nfile , $racine->asXML());

?>