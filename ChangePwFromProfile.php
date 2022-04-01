<?php
session_start();
$db = new mysqli('localhost', 'asib', '', 'wallpaperhd');
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}
$message = "";
$username = $_SESSION['your_name'];
    if (count($_POST) > 0) {
        $newPassword = $_POST['newPassword'];
        $result = mysqli_query($db, "SELECT * FROM users WHERE name ='$username'");
        $row = mysqli_fetch_array($result);
        if ( $row['password'] === md5($_POST["currentPassword"])) {
            mysqli_query($db, "UPDATE users set password = '".md5($newPassword)."' WHERE name = '$username'");
            $_SESSION['message1'] = "Password Changed";
            header("location: myaccount.php");
        } else
            $_SESSION['message2'] = "Current Password is not correct";
            header("location: myaccount.php");
}
?>