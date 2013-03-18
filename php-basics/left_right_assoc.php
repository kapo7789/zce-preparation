<?php

echo 2>1 ? "a" : false ? "b" : "c"; // b : ???

echo "\r\n";

echo 2<1 ? "a" : false ? "b" : "c"; // c : ???

echo "\r\n";

echo 2+4+print 3+5; // 3+5 . 2+4+1 = 87

echo "\r\n";

echo print 1; // 11

echo "\r\n";

echo print 2; // 21

echo "\r\n";

echo print 1, print 2; // 1121

echo "\r\n";

echo 7+2>3-4; // 9 > -1, true = 1

echo "\r\n";

echo 7+(2>3)-4; // 7 + false - 4 = 3