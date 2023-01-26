<?php

$serverName = "localhost";
$userName ="root";
$password = "password";
$useDB = "USE playnums";

$conn = mysqli_connect($serverName,$userName);
if(!$conn){
    die("connetion failed: ". mysqli_connect_error());
}
if($conn->query($useDB) != TRUE){
    echo $conn->error;
}


?>