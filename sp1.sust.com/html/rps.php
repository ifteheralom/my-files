<?php

require_once('../simplesamlphp/lib/_autoload.php');

$auth = new \SimpleSAML\Auth\Simple('default-sp');

if (!$auth->isAuthenticated()) {
    /* Show login link. */
    header("Location: /login.php?service=rps");
} else {
    $attrs = $auth->getAttributes();

    if ($attrs['eduPersonAffiliation'][0] == 'member') {
        echo "You are logged in";
    } else {
        header("Location: /");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPS</title>
</head>

<body>
    <h2>Welcome to RPS service</h2>
    <a href="https://sp1.sust.com/logout.php">Logout</a>

</body>

</html>