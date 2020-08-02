     <?php

  $figure = $_GET['figure'];
    $action = $_GET['action'];
    $direction = $_GET['direction'];
    $head_direction = $_GET['head_direction'];
    $gesture = $_GET['gesture'];
    $size = $_GET['size'];
    $imgFile = "$figure$action$direction$head_direction$gesture$size";
    $imagesPath =  $imgFile;

    if(!file_exists(($imagesPath))) {
       
        $otherSiteUrl  = "https://www.habbo.com.tr/habbo-imaging/avatarimage?figure=$figure&action=$action&direction=$direction&head_direction=$head_direction&gesture=$gesture&size=$size";
        file_put_contents($imagesPath, file_get_contents($otherSiteUrl));
        }
    
 header("Content-Type: image/gif");
        readfile($imagesPath);
        
    ?>