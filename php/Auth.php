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
// initializing variables
$username = "";
$email = "";
$errors = array();
$db = mysqli_connect('localhost', 'asib', '', 'wallpaperhd');
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

// REGISTER USER
if (isset($_POST['signup'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $re_pass = mysqli_real_escape_string($db, $_POST['re_pass']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($name)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($pass)) { array_push($errors, "Password is required"); }
    if ($pass != $re_pass) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['name'] === $name) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $pass = md5($pass);//encrypt the password before saving in the database

        $query = "INSERT INTO users (name, email, password)
  			  VALUES('$name', '$email', '$pass')";
        mysqli_query($db, $query);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}


// LOGIN USER
if (isset($_POST['signin'])) {
    $name = mysqli_real_escape_string($db, $_POST['your_name']);
    $pass = mysqli_real_escape_string($db, $_POST['your_pass']);

    if (empty($name)) {
        array_push($errors, "Username is required");
    }
    if (empty($pass)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $pass = md5($pass);
        $query = "SELECT * FROM users WHERE name='$name' AND password='$pass'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['your_name'] = $name;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
