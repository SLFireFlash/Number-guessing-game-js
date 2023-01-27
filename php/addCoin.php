<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AddCoin</title>
        <link rel="stylesheet" href="../css/loading.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    </head>
    <body>
        


<?php
include "dbconn.php";
session_start();
$username = $_SESSION['username'];
$coinAmount = $_POST['coinamount'];


$sqlAddcoinQuery = "UPDATE users SET CoinAmount ='$coinAmount' WHERE UserName = '$username'";


function calcCoin(){
    $sqlGetCoin = "SELECT CoinAmount from users WHERE UserName = '$username'";
    $coinAm = $conn->query($sqlGetCoin);
    echo $coinAm;
}


if($conn->query($sqlAddcoinQuery) === TRUE){
    $sqlGetCoin = "SELECT CoinAmount from users WHERE UserName = '$username'";
    $coinAm = $conn->query($sqlGetCoin);
    echo $coinAm;
}




?>
</body>
</html>