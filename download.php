<?php
	$file = "release/".URLdecode($_SERVER['QUERY_STRING']);
	$filetypes = array("zip", "tgz");
	$countfile = str_replace($filetypes, "dlc", $file);
	$dlcount = file_get_contents($countfile)+1;
	$countfile = fopen($countfile, "w+");
	fwrite($countfile, $dlcount);
	fclose($countfile);
	header("Location: $file");
?>