


<?php
	$tmpName = $_FILES["myfile"]['tmp_name'];
	$currentDir = getcwd();
	$uploadDir = '\temp';
	$uploadPath = $currentDir . $uploadDir;
	
	$fichierName = $_FILES["myfile"]['name'];
	
	move_uploaded_file($tmpName, "$uploadPath/$fichierName");
	
	$dom = new DOMDocument();
	$dom->load("$uploadPath/$fichierName");
	
	
	if ($dom->validate()) {
		echo "Ce document est valide ! :)";
	}
	else{
		echo "Ce document n'est point valide.";
	}
?>