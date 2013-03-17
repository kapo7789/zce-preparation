<?php

$a = 5;
$b = &$a;

echo "$b\r\n"; // a = 5 => b = 5

$a = 10;

echo "$b\r\n"; // a = 10 => b = 10

$b = 7;

echo "$a\r\n"; // a = 7 <= b = 7