<?php

	$file = "";
	if ($_GET["format"] == "mp3") {
		$file = "whoop-mono.mp3";
	} elseif ($_GET["format"] == "m4r") {
		$file = "ringtone-mono.m4r";
	}
	
	header("Content-type: octet/stream");
	header("Content-disposition: attachment; filename=" . $file . ";");
	header("Content-Length: " . filesize($file));
	readfile($file);
	exit;

?>