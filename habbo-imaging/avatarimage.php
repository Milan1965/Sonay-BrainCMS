<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = 'Y4BB1SH0T3L@123';
$dbdata = 'yabbis';

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbdata);

error_reporting(E_ERROR);
if(isset($_GET['user']) || isset($_GET['direction']) || isset($_GET['head_direction']) || isset($_GET['action']) || isset($_GET['gesture']) || isset($_GET['size']) || isset($_GET['headonly'])){
    $user = mysqli_real_escape_string($con,$_GET['user']);
    $direction = mysqli_real_escape_string($con,$_GET['direction']);
    $head_direction = mysqli_real_escape_string($con,$_GET['head_direction']);
    $action = mysqli_real_escape_string($con,$_GET['action']);
    $gesture = mysqli_real_escape_string($con,$_GET['gesture']);
    $size = mysqli_real_escape_string($con,$_GET['size']);
    $headonly = mysqli_real_escape_string($con,$_GET['headonly']);
    $looksql = mysqli_query($con,"SELECT look FROM users WHERE username='".$user."'");
    while($rowlook = mysqli_fetch_object($looksql)){
        header('Content-Type: image/gif');
    
    $path = 'https://www.habbo.com.tr/habbo-imaging/avatarimage?figure='. $rowlook->look .'&direction='.$direction.'&head_direction='.$head_direction.'&action='.$action.'&gesture='.$gesture.'&size='.$size.'&headonly='.$headonly;
        
    echo file_get_contents($path); 
    }
}


?>