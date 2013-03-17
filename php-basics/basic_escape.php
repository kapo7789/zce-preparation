<?php

$a = 200;

echo "\$a = $a"; // out: $a = 200

echo "\r\n"; // out: new line
echo '\r\n'; // out: \r\n

echo '$a = $a'; // out: $a = $a

$stuff = array(1,2,3);

echo "\r\n000$stuff[1]000\r\n"; // out: 0002000
echo "000{$stuff[1]}000"; // out: 0002000