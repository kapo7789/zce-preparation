<?php

echo "test heredoc output\r\n";

$s = <<<EOL
Let\'s checkout '' and "".
EOL;

echo $s;