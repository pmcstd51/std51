<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You need to enter your credentials to access this page';
    exit;
}
else {
echo "Welcome to the super secret page".$_SERVER['PHP_AUTH_USER']."";


}
?>