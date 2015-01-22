<?php
echo 'Validation Msisdn.php';

$output = shell_exec('php -l ./Mno/Msisdn.php');
echo 'php -l : ' . $output;

$output = shell_exec('vendor/bin/phpcs --standard=PSR2 ./Mno/Msisdn.php');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpmd ./Mno/Msisdn.php text codesize,design,naming,unusedcode,controversial --strict');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpcpd --min-lines 3 --min-tokens 50 ./Mno/Msisdn.php');
echo 'phpcs : ' . $output;


echo 'Validation MsisdnTest.php';

$output = shell_exec('php -l ./Mno/MsisdnTest.php');
echo 'php -l : ' . $output;

$output = shell_exec('vendor/bin/phpcs --standard=PSR2 ./Mno/MsisdnTest.php');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpmd ./Mno/MsisdnTest.php text codesize,design,naming,unusedcode,controversial --strict');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpcpd --min-lines 3 --min-tokens 50 ./Mno/MsisdnTest.php');
echo 'phpcs : ' . $output;