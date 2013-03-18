<?php

$a = 5;


// 5
switch($a){
	default: echo "[default!]";break;
	case 1: echo "1";break;
	case 5: echo "5";break;
}

echo "\r\n";


// 5
switch($a){
	default: echo "[default!]";
	case 1: echo "1";
	case 5: echo "5";
}

echo "\r\n";

// 5[default!]1 - prints everything as it doesn't stop
switch($a){
	case 5: echo "5";
	default: echo "[default!]";
	case 1: echo "1";
}

echo "\r\n";

// 3 or 1!
$a=3;
switch($a){
	case 1:
	case 3:
		echo "3 or 1!";break;
	default: echo "[default!]";break;
}

echo "\r\n";

// [default!]15, as default launches and runs till end
switch($a){
	default: echo "[default!]";
	case 666: echo "1";
	case 555: echo "5";
}
