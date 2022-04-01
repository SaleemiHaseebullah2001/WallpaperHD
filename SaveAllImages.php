<?php
//include('php/Server.php');

// initializing variables
$db = mysqli_connect('localhost', 'id18487776_asib', 'Why4llwaysme!', 'id18487776_wallpaperhd');
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

$html = '<div class="col-md-3 images" data-class="city">
            <img src="images/indexContent/city/city_aerial_view_road_156925_1920x1080.jpg" alt="city, aerial, view, road">
        </div>';


$doc = new DOMDocument();
$doc->loadHTML($html);
$tags = $doc->getElementsByTagName('img','div');
$imgArr = array();
$imgAltArr = array();
$imgDataClass = array();
//iterate over all image tags
foreach ($tags as $tag) {
    //get src attribute of an img tag
    $imgSrc = $tag->getAttribute('src');
    $imgAlt = $tag->getAttribute('alt');
    $imgData = $tag->getAttribute('data-class');
    array_push($imgArr, $imgSrc);
    array_push($imgAltArr, $imgAlt);
    array_push($imgDataClass,$imgData);
}
    echo count($imgAltArr);
$db = new mysqli('localhost', 'id18487776_asib', 'Why4llwaysme!', 'id18487776_wallpaperhd');
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}
for ($x=0;$x<count($imgArr);$x++){
    echo $imgArr[$x];
    $namee = $imgArr[$x];
    $altt = $imgAltArr[$x];
     $data = $imgDataClass[$x];
     $stmt = $db ->prepare("INSERT INTO images(name, alt, data_class) VALUES (?,?,?)");
     $stmt->bind_param('sss',$namee,$altt,$data);
     $stmt ->execute();
    if ( $stmt== true){
        echo 'save';
    }
}


