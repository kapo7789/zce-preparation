<?php

echo (1 & 1) . "\r\n"; // 1 

echo (1 & 0) . "\r\n"; // 0

echo (2 & 1) . "\r\n"; // 0

echo (1^0) . "\r\n"; // 1

echo (2<<3) . "\r\n"; // 2 * pow(2,3) = 16

echo (3<<4) . "\r\n"; // 3 * pow(2,4) = 48

echo (5 << 32) . "\r\n"; // 5 (full cycle shift)