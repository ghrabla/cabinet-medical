<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName ="cabinetpro";
$con = mysqli_connect($serverName,$userName,$password,$dbName);
if(mysqli_connect_errno()){
    echo "failed";
    exit();
}

?>