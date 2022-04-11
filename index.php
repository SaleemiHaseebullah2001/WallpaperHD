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

/* Pagnination System */
//  $stmt = $db->query('SELECT * FROM images');
$per_page_record = 12;  // Number of entries to show in a page.
// Look for a GET variable page if not found default is 1.
$search = "";
$searchq = "";
if (isset($_GET["page"])) {
    $page  = $_GET["page"];

}
else {
    $page=1;
}
if (isset($_GET['query'])&& $_GET["query"] != ""){
    $search = $_GET["query"];
    if ($search == 'all'){
        $start_from = ($page-1) * $per_page_record;
        $stmt = "SELECT * FROM images order by rand() LIMIT $start_from, $per_page_record";

    }else{
        $start_from = ($page-1) * $per_page_record;
        $stmt = "SELECT * FROM images WHERE data_class = '$search' order by rand() LIMIT $start_from, $per_page_record";
    }
}else if (isset($_POST['search'])){
    $start_from = ($page-1) * $per_page_record;
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
    $stmt = "SELECT * FROM images WHERE alt LIKE '%$searchq%' order by rand() LIMIT $start_from, $per_page_record";
}
else{
    $start_from = ($page-1) * $per_page_record;
    $stmt = "SELECT * FROM images order by rand() LIMIT $start_from, $per_page_record";

}
$rs_result = mysqli_query ($db, $stmt);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="https://demo.plantpot.works/assets/css/normalize.css">
    <link rel="stylesheet" href="https://use.typekit.net/opg3wle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/Navbar.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/footer-style/footer.css">

    <title>WallpaperHD</title>
</head>
<body>
<link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
<header>
    <!---->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">Wallpaper<b>HD</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">

            <form action="index.php" method="post" class="navbar-form form-inline">
                <div class="input-group search-box search">
                    <input type="text" id="searchItem" name="search" class="form-control searchItem" placeholder="Search here...">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="material-icons">&#xE8B6;</i>
					</span>
                    </div>
                </div>
            </form>

            <div class="navbar-nav ml-auto action-buttons">
<!--                --><?php
//                if( isset($_SESSION['your_name']) && !empty($_SESSION['your_name']) ){
//                    ?>
<!--                    --><?php
//                }
//                ?>
<!---->
<!--                --><?php
//                if (isset($_GET['logout'])) {
//                    session_destroy();
//                    unset($_SESSION['your_name']);
////                    header("location: index.php");
//                }
//                if( isset($_SESSION['your_name']) && !empty($_SESSION['your_name']) )
//                {
//                    ?>
                    <li class="nav-item dropdown" style="margin-right: 15px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories<span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style=".dropdown-menu max-height: 280px;overflow-y: auto;">
                            <a href="index.php?query=abstract" class="dropdown-item" style="color: black">🌀 Abstract</a>
                            <a href="index.php?query=aesthetic" class="dropdown-item" style="color: black">🌻 Aesthetic</a>
                            <a href="index.php?query=animals" class="dropdown-item" style="color: black">🐶 Animals</a>
                            <a href="index.php?query=anime" class="dropdown-item" style="color: black">💥 Anime</a>
                            <a href="index.php?query=cars" class="dropdown-item" style="color: black">🚗 Cars</a>
                            <a href="index.php?query=city" class="dropdown-item" style="color: black">🌆 City</a>
                            <a href="index.php?query=tech" class="dropdown-item" style="color: black">📱 Devices</a>
                            <a href="index.php?query=fantasy" class="dropdown-item" style="color: black">🧚 Fantasy</a>
                            <a href="index.php?query=fantasy" class="dropdown-item" style="color: black">🌹 Flowers</a>
                            <a href="index.php?query=minimal" class="dropdown-item" style="color: black">🖼️ Minimal</a>
                            <a href="index.php?query=nature" class="dropdown-item" style="color: black">🌳 Nature</a>
                            <a href="index.php?query=games" class="dropdown-item" style="color: black">🎮 Games</a>
                            <a href="index.php?query=space" class="dropdown-item" style="color: black">🚀 Space</a>
                        </div>
                    </li>
<!--                    <li class="nav-item dropdown">-->
<!--                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile </a>-->
<!--                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">-->
<!--                            <b class="dropdown-item">--><?php //echo "Hi,".$_SESSION['your_name']?><!--</b>-->
<!--                            <a class="dropdown-item" href="myaccount.php">My account</a>-->
<!--                            <a class="dropdown-item" href="UserGallery.php">Favourite</a>-->
<!--                            <a class="dropdown-item" href="index.php?logout='1'">Log out</a>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                --><?php //}else{ ?>
<!--                    <li class="nav-item dropdown" style="margin-right: 15px;">-->
<!--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            Categories<span class="caret"></span>-->
<!--                        </a>-->
<!--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style=".dropdown-menu max-height: 280px;overflow-y: auto;">-->
<!--                            <a href="index.php?query=abstract" class="dropdown-item" style="color: black">🌀 Abstract</a>-->
<!--                            <a href="index.php?query=aesthetic" class="dropdown-item" style="color: black">🌻 Aesthetic</a>-->
<!--                            <a href="index.php?query=animals" class="dropdown-item" style="color: black">🐶 Animals</a>-->
<!--                            <a href="index.php?query=anime" class="dropdown-item" style="color: black">💥 Anime</a>-->
<!--                            <a href="index.php?query=cars" class="dropdown-item" style="color: black">🚗 Cars</a>-->
<!--                            <a href="index.php?query=city" class="dropdown-item" style="color: black">🌆 City</a>-->
<!--                            <a href="index.php?query=tech" class="dropdown-item" style="color: black">📱 Devices</a>-->
<!--                            <a href="index.php?query=fantasy" class="dropdown-item" style="color: black">🧚 Fantasy</a>-->
<!--                            <a href="index.php?query=fantasy" class="dropdown-item" style="color: black">🌹 Flowers</a>-->
<!--                            <a href="index.php?query=minimal" class="dropdown-item" style="color: black">🖼️ Minimal</a>-->
<!--                            <a href="index.php?query=nature" class="dropdown-item" style="color: black">🌳 Nature</a>-->
<!--                            <a href="index.php?query=games" class="dropdown-item" style="color: black">🎮 Games</a>-->
<!--                            <a href="index.php?query=space" class="dropdown-item" style="color: black">🚀 Space</a>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <div class="nav-item">-->
<!--                        <a href="Login.php" class="nav-link mr-4">Login</a>-->
<!--                    </div>-->
<!--                    <div class="nav-item">-->
<!--                        <a href="SignUp.php" class="btn btn-primary sign-up-btn">Sign up</a>-->
<!--                    </div>-->
<!--                --><?php //} ?>
            </div>
        </div>
    </nav>
</header>

<br>
<br>
<section class="main container-fluid text-center">
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">WallpaperHD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a>
                        <img src="" id="modal-image" style="width: 100%; height: auto; max-height: 1080px; max-width: 1920px;">
                    </a>
                </div>
                <div class="modal-footer">
                    <div class="footer-left position-absolute start-0">
                        <button class="view-modal">Share</button>
                        <div class="popup">
                            <header class="modal-title">
                                <span>Social Links</span>
                                <div class="close"><i class="uil uil-times"></i></div>
                            </header>
                            <div class="content">
                                <p>Share this link via</p>
                                <div class="icons">
                                    <a href="https:\\www.facebook.com/sharer.php?u=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" target="_blank"><i class="fab fa-facebook-f" ></i></a>
                                    <a href="https://twitter.com/share?text=Im%20Sharing%20on%20Twitter&url=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="https://reddit.com/submit?url=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>&title=Share to your friends" target="_blank"><i class="fab fa-reddit"></i></a>
                                    <a href="whatsapp://send?text=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on whatsapp"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://t.me/share/url?url=<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>&text=Share with your friends" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                                </div>
                                <p>Or copy link</p>
                                <div class="field">
                                    <i class="url-icon uil uil-link"></i>
                                    <label>
                                        <input type="text" readonly value="<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>">
                                    </label>
                                    <button>Copy</button>
                                </div>
                            </div>
                        </div>
<!--                        <div id="fav" class="favourite">-->
<!--                            <i class="heart press"></i>-->
<!--                           <span class="fav-text press"></span>-->
<!--                        </div>-->
                    </div>
                    <div class="footer-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Close</button>
                        <a id="downlaod" href="" target="_blank" download>
                            <button class="btn btn-primary">Download</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container-lg" id="gallery">
    <?php
    while ($row = mysqli_fetch_array($rs_result)) {
        $image = $row['name'];
        $image_alt = $row['alt'];
        $data_class = $row['data_class'];
        echo '<div class="col-md-3 images zoom" data-class='.$data_class.'>
                    <img class="modal-body img-modal-open image" onclick="getImage()" data-toggle="modal" data-target="#exampleModalCenter" src='.$image.'  data-class='.$data_class.' alt='.$image_alt.'>
                    <!--div style="height:20%">
                        <button type="button" class="btn btn-primary btn-modal-open" data-toggle="modal" data-target="#exampleModalCenter" onclick="getImage()" style="vertical-align:center">
                        Download
                        </button>
                    </div-->
                    </div>';
    }
    ?>
    </div>
<br>

    <!-- Pagination System -->
    <div class="pagination_section center">
        <?php
        if (isset($_GET["query"]) && $_GET["query"] != 'all' && $_GET['query'] != ""){
            $query = "SELECT COUNT(*) FROM images WHERE data_class = '$search'";
        }else if (isset($_POST['search'])){
            $query = "SELECT * FROM images WHERE alt LIKE '%$searchq%'";
        }
            else{
            $query = "SELECT COUNT(*) FROM images";
        }
        $rs_result = mysqli_query($db, $query);
        $row = mysqli_fetch_row($rs_result);
        $total_records = $row[0];

        // Number of pages required.
        $total_pages = ceil($total_records / $per_page_record);
        $pagLink = "";
        if($page>=2){
            echo "<a href='index.php?page=".($page-1)."&query=".$search."'>  Prev </a>";
        }
        /*for ($i=1; $i<=$total_pages; $i++) {
            if ($i == $page) {
                $pagLink .= "<a class = 'active' href='index.php?page="
                    .$i."'>".$i." </a>";
            }
            else  {
                $pagLink .= "<a href='index.php?page=".$i."'>   
                                                ".$i." </a>";
            }
        }*/

        if($page>1){
            $pagLink .= "<a href='index.php?page=".($page-1)."&query=".$search."'> ".($page-1)." </a>";

        }
        if ($total_pages>1){
            $pagLink .= "<a class = 'active' href='index.php?page="
                .$page."&query=".$search."'>".$page." </a>";
        }



        if($page<$total_pages){
            $pagLink .= "<a href='index.php?page=".($page+1)."&query=".$search."'> ".($page+1)." </a>";
        }

        echo $pagLink;

        if($page<$total_pages){
            echo "<a href='index.php?page=".($page+1)."&query=".$search."'>  Next </a>";
        }
        ?>
    </div> <br>
<!--    <div class="inline">-->
<!--        <input id="page" type="number" min="1" max="--><?php //echo $total_pages?><!--"-->
<!--               placeholder="--><?php //echo $page."/".$total_pages; ?><!--" required>-->
<!--        <button onClick="go2Page();">Go</button>-->
<!--    </div>-->
</section>

<!--Footer area-->
<br>
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
<!--script>
    function go2Page()
    {
        let page = document.getElementById("page").value;
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));
        window.location.href = 'index.php?page='+page;
    }
</script-->
<script>
    const viewBtn = document.querySelector(".view-modal"),
        popup = document.querySelector(".popup"),
        close = popup.querySelector(".close"),
        field = popup.querySelector(".field"),
        input = field.querySelector("input"),
        copy = field.querySelector("button");

    viewBtn.onclick = ()=>{
        popup.classList.toggle("show");
    }
    close.onclick = ()=>{
        viewBtn.click();
    }

    copy.onclick = ()=>{
        input.select(); //select input value
        if(document.execCommand("copy")){ //if the selected text copy
            field.classList.add("active");
            copy.innerText = "Copied";
            setTimeout(()=>{
                window.getSelection().removeAllRanges(); //remove selection from document
                field.classList.remove("active");
                copy.innerText = "Copy";
            }, 3000);
        }
    }
</script>
<script src="js/index/footer/jquery.min.js"></script>
<script src="js/index/footer/popper.js"></script>
<script src="js/index/footer/bootstrap.min.js"></script>
<script src="js/index/footer/main.js"></script>
<script src="js/index/modal.js"></script>

<!--modal box scripts-->
<script src="js/index/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/index/Images.js"></script>
<script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
