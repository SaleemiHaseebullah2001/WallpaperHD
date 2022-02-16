<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/TOS.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/footer-style/footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Terms & Conditions</title>
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

<div class="content">
    1. Terms
    By accessing this Website, accessible from Website.com, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law. <br>

    2. Use License
    Permission is granted to temporarily download one copy of the materials on Company Name's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:

    modify or copy the materials;
    use the materials for any commercial purpose or for any public display;
    attempt to reverse engineer any software contained on Company Name's Website;
    remove any copyright or other proprietary notations from the materials; or
    transferring the materials to another person or "mirror" the materials on any other server.
    This will let Company Name to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format.<br>

    3. Disclaimer
    All the materials on Company Name's Website are provided “as is”. Company Name makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, Company Name does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.<br>

    4. Limitations
    Company Name or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on Company Name's Website, even if Company Name or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.<br>

    5. Revisions and Errata
    The materials appearing on Company Name's Website may include technical, typographical, or photographic errors. Company Name will not promise that any of the materials in this Website are accurate, complete, or current. Company Name may change the materials contained on its Website at any time without notice. Company Name does not make any commitment to update the materials.<br>

    6. Links
    Company Name has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by Company Name of the site. The use of any linked website is at the user's own risk.<br>

    7. Site Terms of Use Modifications
    Company Name may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.<br>

    8. Governing Law
    Any claim related to Company Name's Website shall be governed by the laws of Country without regards to its conflict of law provisions.</div>

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
<!-- Footer Scripts-->
<script src="js/index/footer/jquery.min.js"></script>
<script src="js/index/footer/popper.js"></script>
<script src="js/index/footer/bootstrap.min.js"></script>
<script src="js/index/footer/main.js"></script>

<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
</body>
</html>