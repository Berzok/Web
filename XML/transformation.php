<?php
	$xslDoc = new DOMDocument();
	$xslDoc->load("Voiliers-v1.xsl");
	$xmlDoc = new DOMDocument();
	$xmlDoc->load("voilier.xml");
	$xmlDoc->xinclude();
	$proc = new XSLTProcessor();
	$proc->importStylesheet($xslDoc);
	$fichierHTML = fopen("voilier.html", "w");
	fwrite($fichierHTML, $proc->transformToXML($xmlDoc));
	fclose($fichierHTML);
?>