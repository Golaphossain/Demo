<?php   

//require_once('../../lib/_autoload.php');
//require 'var/www/simplesamlphp/lib/_autoload.php';
require_once __DIR__ . '/simplesamlphp/lib/_autoload.php';

$auth = new \SimpleSAML\Auth\Simple('default-sp');

if (!$auth->isAuthenticated()) {
    /* Show login link. */
    header("Location: /login.php");
}

$auth->requireAuth([
    'ReturnTo' => 'http://sp1.myserver.com/' .$_GET['service'] .'.php',
    'KeepPost' => FALSE,
]);

$attributes = $auth->getAttributes();
print_r($attributes);


// phpinfo();



?>

