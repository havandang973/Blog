<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $database, $port);

if(!$conn) {
    trigger_error("Could not connect to DB: ". mysqli_connect_error());
}else {
    $conn->set_charset('utf8');
}

?>