<?php

if ($argc !== 2) {
    echo "Format: php php_cli.php <name>\n";
    exit(1);
}

$name = $argv[1];
echo "Hello, {$name}!\n";

?>
