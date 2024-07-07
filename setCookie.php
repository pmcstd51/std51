<?php
// HTTP authentication
if (!isset($_SERVER['PHP_AUTH_USER'])) || 
(!($_SERVER['PHP_AUTH_USER'] == 'admin' || $_SERVER['PHP_AUTH_PW'] != 'hello'))
{
header('WWW-Authenticate: Basic realm "My Realm"');
header('HTTP/1.0 401 Unauthorized');
echo "Access Denied !!";
exit;
}

 




else {
    echo "Welcome, to the secret zone", $_SERVER['PHP_AUTH_USER']
}