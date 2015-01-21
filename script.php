<?php
$output = shell_exec('php -l Mno.php');
echo 'php -l : ' . $output;

$output = shell_exec('vendor/bin/phpcs --standard=PSR2 Mno.php');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpmd Mno.php text codesize,design,naming,unusedcode,controversial --strict');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpcpd --min-lines 3 --min-tokens 50 Mno.php');
echo 'phpcs : ' . $output;