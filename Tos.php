<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/TOS.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/footer-style/footer.css">
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
<!-- Footer Scripts-->
<script src="js/index/footer/jquery.min.js"></script>
<script src="js/index/footer/popper.js"></script>
<script src="js/index/footer/bootstrap.min.js"></script>
<script src="js/index/footer/main.js"></script>
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>