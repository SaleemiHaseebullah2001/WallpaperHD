<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/footer-style/footer.css">
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
<header class="masthead">
    <p class="masthead-heading">i am haseeb</p>
    <p class="masthead-intro"> About me!</p>
</header>
<section class="introduction-section">
    <h1>Introduction</h1>
    <p>I am a construction business owner, part time marketer, and soon to be web developer.</p>
    <p>I love the internet, technology, and building beautiful things.</p>
</section>
<section class="location-section">
    <h1>Where I'm From</h1>
    <p>I'm originally from Toronto, Ontario. </p>
</section>
<section class="questions-section">
    <h1>More About Me</h1>
    <h2>What are your favorite hobbies?</h2>
    <p>My favorite hobby is building things on the internet like ecommerce sites and email marketing campaigns.</p>
    <h2>What's your dream job?</h2>
    <p>My dream job is similar to my current job except I would like to be building software instead of buildings.</p>
    <h2>Where do you live?</h2>
    <p>I live on a rural acreage, but I'm close to Ottawa and Montreal.</p>
    <h2>Why do you want to be a web developer?</h2>
    <p>Because programming is awesome and programming for the internet is even more awesome.</p>
</section>

<div class="footer-basic">
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/asib_s/"><i class="icon ion-social-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UC4aRNTgDTFGKAxhWCcRr32Q"><i class="icon ion-social-youtube"></i></a>
            <a href="https://github.com/SaleemiHaseebullah2001/"><i class="icon ion-social-github"></i></a>
            <a href="https://www.facebook.com/WallPapersHD2001"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php">Home</a></li>
            <li class="list-inline-item"><a href="About.php">About Me</a></li>
            <li class="list-inline-item"><a href="ContactUs.php">Contact Me</a></li>
            <li class="list-inline-item"><a href="Tos.php">Terms&Conditions</a></li>
        </ul>
        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | WallpaperHD is made by AsibX</p>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>
</html>