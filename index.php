<?php

require('vendor/opauth/opauth/lib/Opauth/Opauth.php');
$config = array(
// see https://github.com/opauth/opauth/wiki/Opauth-configuration
	'path' => '/TnNet',
//	'path' => '/',	
	'debug' => true,
//	'debug' => false,
	'callback_url' => '{path}callback.php',
	'callback_transport' => 'post',
//	'callback_transport' => 'session',
	'security_salt' => 'dJJsaidosadsKLJ78786DsjksdhjkDss8',
	'security_iteration' => 300,
	'security_timeout' => '2 minutes',
//	'security_timeout' => '1 second',
	'Strategy' => array(
    	'OpenID' => array(

     	),
  	),
);

$Opauth = new Opauth($config);