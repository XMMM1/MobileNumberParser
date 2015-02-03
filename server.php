<?php
require './Mno/Msisdn.php';
chdir(__DIR__ . '/vendor/jsonrpc/jsonrpc/src/');
ini_set('default_charset', 'UTF-8');
ini_set('display_errors', '1');

# bootstrap for the example directory
require('bootstrap.php');

# set up our method handler class
$methods = new Mno\Msisdn();

# create our server object, passing it the method handler class
$Server = new JsonRpc\Server($methods);

# and tell the server to do its stuff
$Server->receive();
