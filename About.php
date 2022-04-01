<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/footer-style/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
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

<footer>
    <div class="footer-main">
        <div id="sticky" class="copyright">
            <div class="footer-links">
                <a href="About.php">About Me</a>
                <a href="Tos.php">Terms&Conditions</a>
                <a href="ContactUs.php">Contact Me</a>
            </div>
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | WallpaperHD is made by AsibX </p>
        </div>
    </div>
</footer>
</body>
</html>