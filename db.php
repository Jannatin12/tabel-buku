<?php

$db_name = "buku";
$db_username = "root";
$db_pass = "";
$db_host = "localhost";
$db_port = "3306";

$connect = mysqli_connect($db_host, $db_username, $db_pass, $db_name, $db_port);

if( !$connect){
    die("ada error".mysqli_connect_error());
}

?>

