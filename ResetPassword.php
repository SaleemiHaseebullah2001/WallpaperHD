<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Login</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<header>
    <!---->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">Wallpaper<b>HD</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="About.php" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Categories</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Web Design</a>
                        <a href="#" class="dropdown-item">Web Development</a>
                        <a href="#" class="dropdown-item">Graphic Design</a>
                        <a href="#" class="dropdown-item">Digital Marketing</a>
                    </div>
                </div>
                <a href="TOS.php" class="nav-item nav-link">Terms</a>
                <a href="#" class="nav-item nav-link">Blog</a>
                <a href="ContactUs.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto action-buttons">
                <?php
                if( isset($_SESSION['your_name']) && !empty($_SESSION['your_name']) ){
                    ?>
                    <text class="display-flex-center"><?php echo $_SESSION['your_name'] ?></text>
                    <?php
                }
                ?>

                <?php
                if (isset($_GET['logout'])) {
                    session_destroy();
                    unset($_SESSION['your_name']);
                    header("location: Login.php");
                }
                if( isset($_SESSION['your_name']) && !empty($_SESSION['your_name']) )
                {
                    ?>

                    <div class="nav-item">
                        <a href="index.php?logout='1'" class="nav-link mr-4"> Logout </a>
                    </div>
                <?php }else{ ?>
                    <div class="nav-item">
                        <a href="Login.php" class="nav-link mr-4">Login</a>
                    </div>
                    <div class="nav-item">
                        <a href="SignUp.php" class="btn btn-primary sign-up-btn">Sign up</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>
<?php
$db = mysqli_connect('localhost', 'asib', '', 'wallpaperhd');
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}
$error = "";
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"])
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($db,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is
deactivated.</p>
<p><a href="http://localhost/WebstormProjects/WallpaperSite/ForgotPassword.php">
Click here</a> to reset password.</p>';
	}else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
  ?>
<div class="main">

    <!-- Reset password in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="images/Reset password-pana.svg" alt="sing up image"></figure>
                    <a href="Login.php" class="signup-image-link">or go back to login</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Reset Password</h2>
                    <form action="ResetPassword.php" method="POST" name="update" class="register-form" id="login-form">
                    <input type="hidden" name="action" value="update" />
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="password1"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password1" id="password1" placeholder="Confirm Password" />
                        </div>
                        <div class="form-group form-button">
                            <input type="hidden" name="email" value="<?php echo $email;?>"/>
                            <input type="submit" name="signin" id="resetpw" class="form-submit" value="Reset"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<?php
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='errorrp'>".$error."</div><br />";
  }
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($db,$_POST["password"]);
$pass2 = mysqli_real_escape_string($db,$_POST["password1"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
echo "<div class='errorrp'>".$error."</div><br />";
}else{
$pass1 = md5($pass1);
mysqli_query($db,
"UPDATE `users` SET `password`='".$pass1."', `trn_date`='".$curDate."'
WHERE `email`='".$email."';"
);

mysqli_query($db,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");

echo '<div class="errorrp"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="https://www.allphptricks.com/forgot-password/login.php">
Click here</a> to Login.</p></div><br />';
	  }
}
?>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/index/main.js"></script>
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>
</html>
