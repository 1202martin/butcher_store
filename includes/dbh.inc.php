<?php
    //Contains string literal value of db acess; needs update
$servername = "localhost";
$dBUsername = 'remote_admin';
$dBPassword = 'gwanggaeto*12';
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