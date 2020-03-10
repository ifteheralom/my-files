<?php   

require_once('../simplesamlphp/lib/_autoload.php');

$auth = new \SimpleSAML\Auth\Simple('default-sp');

$auth->requireAuth();

$attrs = $auth->getAttributes();
echo $attrs[urlencode('eduPersonAffiliation')][0];
print_r($attrs);
echo urlencode('eduPersonAffiliation');
// phpinfo();


?>
