<?php
echo 'Validation Msisdn.php';

$output = shell_exec('php -l ./Mno/Msisdn.php');
echo 'php -l : ' . $output;

$output = shell_exec('vendor/bin/phpcs --standard=PSR2 ./Mno/Msisdn.php');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpmd ./Mno/Msisdn.php text codesize,design,naming,unusedcode,controversial --strict');
echo 'phpmd : ' . $output;

$output = shell_exec('vendor/bin/phpcpd --min-lines 3 --min-tokens 50 ./Mno/Msisdn.php');
echo 'phpcpd : ' . $output;


echo 'Validation MsisdnTest.php';

$output = shell_exec('php -l ./Mno/Test/MsisdnTest.php');
echo 'php -l : ' . $output;

$output = shell_exec('vendor/bin/phpcs --standard=PSR2 ./Mno/Test/MsisdnTest.php');
echo 'phpcs : ' . $output;

$output = shell_exec('vendor/bin/phpmd ./Mno/Test/MsisdnTest.php text codesize,design,naming,unusedcode,controversial --strict');
echo 'phpmd : ' . $output;

$output = shell_exec('vendor/bin/phpcpd --min-lines 3 --min-tokens 50 ./Mno/Test/MsisdnTest.php');
echo 'phpcpd : ' . $output;