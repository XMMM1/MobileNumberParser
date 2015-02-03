<?php
//echo 'Validation Msisdn.php';
//
//$output = shell_exec('php -l ./Mno/Msisdn.php');
//echo 'php -l : ' . $output;
////echo '<br />';
//$output = shell_exec('vendor/bin/phpcs --standard=PSR2 ./Mno/Msisdn.php');
//echo 'phpcs : ' . $output;
////echo '<br />';
//
//$output = shell_exec('vendor/bin/phpmd ./Mno/Msisdn.php text codesize,design,naming,unusedcode,controversial --strict');
//echo 'phpmd : ' . $output;
////echo '<br />';
//
//$output = shell_exec('phpcpd --min-lines 3 --min-tokens 50 ./Mno/Msisdn.php');
//echo 'phpcpd : ' . $output;
////echo '<br />';
//
//
//echo 'Validation MsisdnTest.php';
//
//$output = shell_exec('php -l ./Mno/Test/MsisdnTest.php');
//echo 'php -l : ' . $output;
////echo '<br />';
//
//$output = shell_exec('vendor/bin/phpcs --standard=PSR2 ./Mno/Test/MsisdnTest.php');
//echo 'phpcs : ' . $output;
////echo '<br />';
//
//$output = shell_exec('vendor/bin/phpmd ./Mno/Test/MsisdnTest.php text codesize,design,naming,unusedcode,controversial --strict');
//echo 'phpmd : ' . $output;
////echo '<br />';
//
//$output = shell_exec('phpcpd --min-lines 3 --min-tokens 50 ./Mno/Test/MsisdnTest.php');
//echo 'phpcpd : ' . $output;
////echo '<br />';
//
//
//$output = shell_exec('puppet parser validate puppet/manifests/default.pp');
//echo 'default.pp : ' . $output;
////echo '<br />';
//$output = shell_exec('puppet parser validate puppet/modules/apache/manifests/init.pp');
//echo 'apache init.pp : ' . $output;
////echo '<br />';
//$output = shell_exec('puppet parser validate puppet/modules/php/manifests/init.pp');
//echo 'php init.pp : ' . $output;
////echo '<br />';
//$output = shell_exec('puppet parser validate puppet/modules/php55/manifests/init.pp');
//echo 'php55 init.pp : ' . $output;
////echo '<br />';


//echo 'Validation client.php';
//$output = shell_exec('php -l client.php');
//echo 'php -l : ' . $output;
//$output = shell_exec('vendor/bin/phpcs --standard=PSR2 client.php');
//echo 'phpcs : ' . $output;
//$output = shell_exec('vendor/bin/phpmd client.php text codesize,design,naming,unusedcode,controversial --strict');
//echo 'phpmd : ' . $output;
//$output = shell_exec('phpcpd --min-lines 3 --min-tokens 50 client.php');
//echo 'phpcpd : ' . $output;

echo 'Validation server.php';
$output = shell_exec('php -l server.php');
echo 'php -l : ' . $output;
$output = shell_exec('vendor/bin/phpcs --standard=PSR2 server.php');
echo 'phpcs : ' . $output;
$output = shell_exec('vendor/bin/phpmd server.php text codesize,design,naming,unusedcode,controversial --strict');
echo 'phpmd : ' . $output;
$output = shell_exec('phpcpd --min-lines 3 --min-tokens 50 server.php');
echo 'phpcpd : ' . $output;

echo 'Validation bootstrap.php';
$output = shell_exec('php -l bootstrap.php');
echo 'php -l : ' . $output;
$output = shell_exec('vendor/bin/phpcs --standard=PSR2 bootstrap.php');
echo 'phpcs : ' . $output;
$output = shell_exec('vendor/bin/phpmd bootstrap.php text codesize,design,naming,unusedcode,controversial --strict');
echo 'phpmd : ' . $output;
$output = shell_exec('phpcpd --min-lines 3 --min-tokens 50 bootstrap.php');
echo 'phpcpd : ' . $output;