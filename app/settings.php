<?php

function isLocalhost()
{
	$isLocalhost = true;
	$url = $_SERVER['HTTP_HOST'];
	if (strpos($url, "localhost") === false) {
		$isLocalhost = false;
	}

	return $isLocalhost;
}
$isLocalhost = isLocalhost();//echo $isLocalhost;exit;

$GLOBALS['isLocalhost'] = $isLocalhost;
define('SSL', true);
define('SERVER', ($GLOBALS['isLocalhost'])?"bluemobile.localhost":"bluemobile.com.tw");//dump(SERVER);
define('NAME', "藍色行動有限公司");
define('ROOT', __DIR__ ."/../../");
define('DS', "/");

ini_set('session.cookie_domain', '.'.SERVER );
date_default_timezone_set("Asia/Taipei");
session_start();

// Settings
$settings = [];

// Path settings
// "/Users/ives/vhost/bluemobile"
$settings["root"] = dirname(__DIR__);//var_dump($settings);exit;
?>