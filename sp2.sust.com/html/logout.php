<?php   

require_once('../simplesamlphp/lib/_autoload.php');
$auth = new \SimpleSAML\Auth\Simple('default-sp');
$auth->logout('https://sp2.sust.com');


?>
