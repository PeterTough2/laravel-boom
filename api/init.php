<?php
// Show all errors and warnings
//ini_set('display_errors', 'On');
error_reporting(0);

// Load the configuration file.
if (!function_exists('json_decode')) {
    echo ('We could not find json_decode. json_decode is found in php 5.2 and up, but not found on many linux systems due to licensing conflicts. If you are running ubuntu try "sudo apt-get install php5-json".');
}
require_once(__DIR__."/config.php");
$config = json_decode($json, true);
if (empty($config['client_id']) || empty($config['client_secret'])) {
	echo ('We could not locate your client id or client secret in "config.json" Please create one, and reference config.json.example');
}
return $config;
