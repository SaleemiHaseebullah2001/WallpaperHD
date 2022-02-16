<?php include('php/Server.php');?>
<?php
if(!isset($_SESSION)) {
    session_start();
}
$db = new mysqli('localhost', 'asib', '', 'wallpaperhd');
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}
  $stmt = $db->query('SELECT * FROM images');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/Images.css">
    <link rel="stylesheet" href="css/footer-style/footer.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>WallpaperHD</title>
</head>
<body>
<!--<script>-->
<!--    window.fbAsyncInit = function() {-->
<!--        FB.init({-->
<!--            appId      : '1839782052879775',-->
<!--            xfbml      : true,-->
<!--            version    : 'v13.0'-->
<!--        });-->
<!--        FB.AppEvents.logPageView();-->
<!--    };-->
<!---->
<!--    (function(d, s, id){-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) {return;}-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = "https://connect.facebook.net/en_US/sdk.js";-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));-->
<!--</script>-->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
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
            <form class="navbar-form form-inline">
                <div class="input-group search-box search">
                    <input type="text" id="searchItem" class="form-control searchItem" placeholder="Search here...">
                    <div class="input-group-append">
                        <span class="input-group-text">
						<i class="material-icons">&#xE8B6;</i>
					</span>
                    </div>
                </div>
            </form>
            <div class="navbar-nav ml-auto action-buttons">
                <?php
                if( isset($_SESSION['your_name']) && !empty($_SESSION['your_name']) ){
                    ?>
                        <div class="nav-item">
                    <text class="display-flex-center"><?php echo $_SESSION['your_name'] ?></text>
                        </div>
                    <?php
                }
                ?>

                <?php
                if (isset($_GET['logout'])) {
                    session_destroy();
                    unset($_SESSION['your_name']);
//                    header("location: index.php");
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

<section class="main text-center">
<!--    <div class="container">-->
<!--        <ul class="list-unstyled row">-->
<!--            <li class="col-md active" data-class="all">ALL</li>-->
<!--            <li class="col-md" data-class="nature">NATURE</li>-->
<!--            <li class="col-md" data-class="game">GAMES</li>-->
<!--            <li class="col-md" data-class="space">SPACE</li>-->
<!--            <li class="col-md" data-class="fantasy">FANTASY</li>-->
<!--            <li class="col-md" data-class="tech">TECH</li>-->
<!--            <li class="col-md" data-class="city">CITY</li>-->
<!--            <li class="col-md" data-class="minimal">MINIMAL</li>-->
<!--        </ul>-->
<!--    </div>-->
    <!-- Modal -->

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">WallpaperHD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <b>Thanks for downloading from our website!!!</b>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href=".$image." download>
                            <button type="button" class="btn btn-primary">Download</button>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
            <div class="container-fluid" id="gallery">
                <?php
                if($stmt -> num_rows > 0){
                    $i =4;
                    foreach ($stmt as $row){
                        if($i==4){
                            echo '<div class="row">';
                        }
                        $image = $row['name'];
                        $image_alt = $row['alt'];
                        echo '<div class="col-md-3 images" data-class="space">
                    <img class="modal-body" data-tags="atlantis" src='.$image.'  data-alt='.$image_alt.' alt='.$image_alt.' loading="lazy">
                    <div style="height:20%">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="vertical-align:center">
                        Download
                        </button>
                    </div>
                    </div>';
                        $i--;
                        if($i==0){
                            echo '</div>';
                            $i=4;
                        }
                    }
                }

                ?>
            </div>

        <!--
                <div class="col-md-3 images" data-class="space">
                    <img data-tags="atlantis" src="images/indexContent/space/atlantis_nebula_14-wallpaper-1920x1080.jpg" data-alt="atlantis" alt="atlantis">
                </div>
                <div class="col-md-3 images" data-class="minimal">
                    <img src="images/indexContent/minimal/minimal_2_1920x1080.jpg" alt="minimal,minimalistic,minimalist">
                </div>
                -->
<!--        <div class="col-md-3 images" data-class="fantasy">-->
<!--            <img src="images/indexContent/fantasy/fantasy_1920_1920x1080.jpg" alt="fantasy,butterfly,blue">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/minimal_landscape-wallpaper-1920x1080.jpg" alt="minimal,minimalistic,minimalist">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="city">-->
<!--            <img src="images/indexContent/city/full_moon_lights_los_angeles_city_united_states%201920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="game">-->
<!--            <img src="images/indexContent/games/god_king_garen_lol_splash_art_league_of_legends-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="nature">-->
<!--            <img src="images/indexContent/nature/green_tropical_leaves-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="game">-->
<!--            <img src="images/indexContent/games/league_of_legends_guardian_angel-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="tech">-->
<!--            <img src="images/indexContent/tech/macbook_pro_laptop_purple_light-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/minimalist_art_design_i-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="fantasy">-->
<!--            <img src="images/indexContent/fantasy/magical_tree_fantasy_art%201920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/aircrafts_minimalism-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="nature">-->
<!--            <img src="images/indexContent/nature/rose_1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/minimal_5_1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="nature">-->
<!--            <img src="images/indexContent/nature/sunset_1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/minimalistic_apstrakt_uhd-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/minimalistic_circle-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="game">-->
<!--            <img src="images/indexContent/games/valorant_viper-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/drone_minimal_artwork-wallpaper-1920x1080.jpg" alt="">-->
<!--        </div>-->
<!--        <div class="col-md-3 images" data-class="minimal">-->
<!--            <img src="images/indexContent/minimal/minimal_1_1920x1080.jpg" alt="">-->
<!--        </div>-->

<br>
</section>
<!--<div-->
<!--        class="fb-like"-->
<!--        data-share="true"-->
<!--        data-width="450"-->
<!--        data-show-faces="true">-->
<!--</div>-->
<!--Footer area-->
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


<!--footer scripts-->
<script src="js/index/footer/jquery.min.js"></script>
<script src="js/index/footer/popper.js"></script>
<script src="js/index/footer/bootstrap.min.js"></script>
<script src="js/index/footer/main.js"></script>

<!--modal box scripts-->
<script src="js/index/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="js/index/Images.js"></script>
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>


</body>
</html>
