<?php

	$r = include 'includefile.php'; // output includefile echo and 1 (include returns 1)
	echo "\r\n";
	var_dump($r);

	echo "\r\n\r\n";
	$r = @include 'nosuchfile.php'; // output bool(false) as file not found;
	var_dump($r);