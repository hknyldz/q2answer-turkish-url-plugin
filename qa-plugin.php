<?php
/*
	Plugin Name: Turkish Url
	Plugin Description: Local Char to universal char example :ç-c,ö-o,u,ü .
	Plugin Version: 1.0
	Plugin Date: 2017-11-0.6
	Plugin Minimum Question2Answer Version: 1.7.5
*/

if (!defined('QA_VERSION')) { 
	header('Location: ../../');
	exit;
}

qa_register_plugin_overrides('qa-q-request-overrides.php');
