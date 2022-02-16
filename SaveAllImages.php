<?php
include('php/Server.php');

$html = '<div class="col-md-3 images" data-class="fantasy">
            <img src="images/indexContent/fantasy/fantasy_1920_1920x1080.jpg" alt="fantasy,butterfly,blue">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/minimal_landscape-wallpaper-1920x1080.jpg" alt="minimal,landscape,minimalistic,minimalist">
        </div>
        <div class="col-md-3 images" data-class="city">
            <img src="images/indexContent/city/full_moon_lights_los_angeles_city_united_states%201920x1080.jpg" alt="city,moon,lights,la,los,angeles,us,united,states">
        </div>
        <div class="col-md-3 images" data-class="game">
            <img src="images/indexContent/games/god_king_garen_lol_splash_art_league_of_legends-wallpaper-1920x1080.jpg" alt="games,game,king,garen,lol,league,legend,league of legend">
        </div>
        <div class="col-md-3 images" data-class="nature">
            <img src="images/indexContent/nature/green_tropical_leaves-wallpaper-1920x1080.jpg" alt="nature,tropical,green,leaves">
        </div>
        <div class="col-md-3 images" data-class="game">
            <img src="images/indexContent/games/league_of_legends_guardian_angel-wallpaper-1920x1080.jpg" alt="games,game,lol,league,legend,angel,guardian">
        </div>
        <div class="col-md-3 images" data-class="tech">
            <img src="images/indexContent/tech/macbook_pro_laptop_purple_light-wallpaper-1920x1080.jpg" alt="macbook,apple,laptop,purple,light">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/minimalist_art_design_i-wallpaper-1920x1080.jpg" alt="minimal,art,design,minimalistic,">
        </div>
        <div class="col-md-3 images" data-class="fantasy">
            <img src="images/indexContent/fantasy/magical_tree_fantasy_art%201920x1080.jpg" alt="fantasy,magical,tree,art">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/aircrafts_minimalism-wallpaper-1920x1080.jpg" alt="mnimal,aircraft,minimalistic,minimalism">
        </div>
        <div class="col-md-3 images" data-class="nature">
            <img src="images/indexContent/nature/rose_1920x1080.jpg" alt="nature,rose,pink">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/minimal_5_1920x1080.jpg" alt="minimal,minimalistic,minimalism,">
        </div>
        <div class="col-md-3 images" data-class="nature">
            <img src="images/indexContent/nature/sunset_1920x1080.jpg" alt="nature,sunset,purple">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/minimalistic_apstrakt_uhd-wallpaper-1920x1080.jpg" alt="minimal,abstract,mnimalism">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/minimalistic_circle-wallpaper-1920x1080.jpg" alt="minimal,minimalistic,circle,mnimalism">
        </div>
        <div class="col-md-3 images" data-class="game">
            <img src="images/indexContent/games/valorant_viper-wallpaper-1920x1080.jpg" alt="game,games,valorant,viper">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/drone_minimal_artwork-wallpaper-1920x1080.jpg" alt="mnimal,drone,minimalism,art,artwork">
        </div>
        <div class="col-md-3 images" data-class="minimal">
            <img src="images/indexContent/minimal/minimal_1_1920x1080.jpg" alt="minimal minimalistic,minimalism">
        </div>
        <div class="col-md-3 images" data-class="space">
            <img src="images/indexContent/space/great_exuma_island_bahamas_seen_from_space-wallpaper-1920x1080.jpg" alt="space,exuma,bahamas,island">
        </div>
        <div class="col-md-3 images" data-class="space">
            <img src="images/indexContent/space/magenta_explorer-wallpaper-1920x1080.jpg" alt="space,magenta,explorer">
        </div>
        <div class="col-md-3 images" data-class="space">
            <img src="images/indexContent/space/nebula_by_hubble-wallpaper-1920x1080.jpg" alt="space,nebula,hubble,blu,blue">
        </div>
        <div class="col-md-3 images" data-class="space">
            <img src="images/indexContent/space/the_faunt-wallpaper-1920x1080.jpg" alt="space,faunt,purple">
        </div>';


$doc = new DOMDocument();
$doc->loadHTML($html);
$tags = $doc->getElementsByTagName('img');
$imgArr = array();
$imgAltArr = array();
//iterate over all image tags
foreach ($tags as $tag) {
    //get src attribute of an img tag
    $imgSrc = $tag->getAttribute('src');
    $imgAlt = $tag->getAttribute('alt');
    array_push($imgArr, $imgSrc);
    array_push($imgAltArr, $imgAlt);
}
    echo count($imgAltArr);
$db = new mysqli('localhost', 'asib', '', 'wallpaperhd');
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}
//for ($x=0;$x<count($imgArr);$x++){
//    echo $imgArr[$x];
//    $namee = $imgArr[$x];
//    $altt = $imgAltArr[$x];
//     $stmt = $db ->prepare("INSERT INTO images(name, alt) VALUES (?,?)");
//     $stmt->bind_param('ss',$namee,$altt);
//     $stmt ->execute();
//    if ( $stmt== true){
//        echo 'save';
//    }
//}


