<?php

chdir(__DIR__ . '/vendor/jsonrpc/jsonrpc/src/');
ini_set('default_charset', 'UTF-8');
ini_set('display_errors', '1');

# bootstrap for the example directory
require('bootstrap.php');

# get the url of the server script
$path = dirname($_SERVER['PHP_SELF']) . '/server.php';
$scheme = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') ? 'https' : 'http';
$url = $scheme . '://' . $_SERVER['HTTP_HOST'] . $path;

# create our client object, passing it the server url
$client = new JsonRpc\Client($url);

# set up our rpc call with a method and params
$method = 'getMsisdnDetail';
$params = array($_POST['msisdn']);

$success = false;

$success = $client->call($method, $params);
