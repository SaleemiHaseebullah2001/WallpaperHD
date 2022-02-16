<?php
// initializing variables
$username = "";
$email    = "";
$errors = array();
$db = mysqli_connect('localhost', 'asib', '', 'wallpaperhd');
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}
?>