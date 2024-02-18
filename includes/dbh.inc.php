<?php
    
$servername = "localhost";
$dBUsername = 'root';
$dBPassword = 'geommojam*12';
$dBName = "butcherStore";


$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
// if(!$conn) {
//     // if connection not created
//     // kill the connection
//     die("Connection failed:".mysqli_connect_error());
// }
if (mysqli_connect_errno()){
    echo "Failed to Connect to MySQL: ", mysqli_connect_error();
    exit();
}
?>