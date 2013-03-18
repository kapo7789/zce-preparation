<?php

echo "10"==10; // 1

echo "\r\n";

echo 25 == "25boo"; // 1

echo "\r\n";

echo 1+'aaa'+1; // 2 : "aaa" is being to integer first, which is 0

echo "\r\n";

echo "xx" + "yy"; // 0 : same as with previous example

echo "\r\n";

echo (integer)"777stuff"; // 777

echo "\r\n";

var_dump("10"===10); // false

echo "\r\n";

echo (integer)"stuff888";