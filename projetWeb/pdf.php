<?php

	
	
	require_once('fonctions.php');
	require_once('data/dompdf/autoload.inc.php');
	ob_start();
	require_once('traitement_admin.php');
	use Dompdf\Dompdf;
	use Dompdf\Options;


	$html = file_put_contents('admin_page.html', ob_get_clean());
	
	
	$pdf = new Dompdf();
	$pdf->options->setIsHtml5ParserEnabled(true);
	$pdf->getOptions()->setChroot(getcwd());
	$pdf->setBasePath('pics/');
	
	$pdf->loadHtmlFile('admin_page.html');
	$pdf->setPaper('A4', 'portrait');
	$pdf->render();
	$pdf->stream("Votes", array("Attachment"=>0));
	
?>