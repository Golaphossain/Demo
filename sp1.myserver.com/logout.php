<?php   
//require_once('../simplesamlphp/lib/_autoload.php');
require_once __DIR__ . '/simplesamlphp/lib/_autoload.php';
$auth = new \SimpleSAML\Auth\Simple('default-sp');
$auth->logout('http://sp1.myserver.com');
?>
