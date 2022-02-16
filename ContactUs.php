<!--?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
// Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = 'itsme.valorantpro@gmail.com'; // YOUR gmail email
$mail->Password = 'Pi4zzadarminumer018!'; // YOUR gmail password

// Sender and recipient settings
$mail->setFrom('asibpro@gmail.com', 'Sender Name');
$mail->addAddress('itsme.valorantpro@gmail.com', 'Receiver Name');
$mail->addReplyTo('asibpro@gmail.com', 'Sender Name'); // to set the reply to

// Setting the email content
$mail->IsHTML(true);
$mail->Subject = "Send email using Gmail SMTP and PHPMailer";
$mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
$mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

$mail->send();
echo "Email message sent.";
} catch (Exception $e) {
echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}

?-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="fonts/ContactUsFont/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/ContactUsCss/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/ContactUsCss/style.css">
    <link rel="stylesheet" href="css/footer-style/footer.css">
    <link rel="stylesheet" href="css/Navbar.css">

    <title>Contact Us</title>
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
<br>
<br>

<div class="content">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">


                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <h3 class="heading mb-4">Let's talk about everything!</h3>
                        <p>Contact us by filling this form and we'll contact you as soon as possible &#x1F604; </p>

                        <p><img src="images/ContactUsImg/undraw-contact.svg" alt="Image" class="img-fluid"></p>


                    </div>
                    <div class="col-md-6">

                        <form class="mb-5" action="ContactUs.php" method="post" id="contactForm" name="contactForm">
                            <div class="row">
                                <!--?php echo((!empty($errorMessage)) ? $errorMessage : '') ?-->
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit"  name="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<footer class="footer-distributed">

    <div class="footer-right">

        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="https://github.com/SaleemiHaseebullah2001" target="_blank"><i class="fa fa-github"></i></a>

    </div>

    <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="index.php">Home</a>

            <a href="#">Blog</a>

            <a href="#">Pricing</a>

            <a href="#">About</a>

            <a href="#">Term of Services</a>

            <a href="ContactUs.php">Contact</a>
        </p>

        <p class="copyright">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | WallpaperHD is made by AsibX
        </p>
    </div>

</footer>
<!--Form Validation Script -->
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#name").val();
            var userEmail = $("#email").val();
            var subject = $("#subject").val();
            var content = $("#message").val();

            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
    </script>
<!-- Js Scripts-->
<script src="js/ContactUsJs/jquery-3.3.1.min.js"></script>
<script src="js/ContactUsJs/popper.min.js"></script>
<script src="js/ContactUsJs/bootstrap.min.js"></script>
<script src="js/ContactUsJs/jquery.validate.min.js"></script>
<script src="js/ContactUsJs/main.js"></script>
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>
</html>