<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "mr_tobi";

$conn = mysqli_connect($host,$username,$pass,$db);
if(mysqli_connect_error()){
    echo "Failed to connect to MySQli:" .mysqli_connect_error();
}
?>