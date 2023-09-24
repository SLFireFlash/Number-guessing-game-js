<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayNums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
     <div class="wraper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PlayNums</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="addCoin.html">Add Coins</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                    <?php
                        echo strtoupper($_SESSION['coinAmount']);
                        ?>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navDropDown">
                    <?php
                        if(!isset($_SESSION['username'])) {
                            header('Location: index.html');
                            exit;}
                        echo strtoupper($_SESSION['username']);
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="php/logout.php">Logout</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </nav>
  
        <div class="gamebody d-flex flex-row justify-content-center">
            <div class="select-coins">
              <h1 class="btn-select-coin btn-hide-ele"><span>SELECT GAME</span></h1>
                <button class="button btn-select-coin btn-hide-ele p-2" type="submit" name="WORDLE" " id="btn-select-coin-50" onclick="window.open('wordle/Game.html')"><span>WORDLE</span></button>
                <button class="button btn-select-coin btn-hide-ele p-2" type="submit" name="Slot" " id="btn-select-coin-100" onclick="window.open('slot/Game.html')"><span>GUESS IT</span></button>
           

    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

if (isset($_POST['CoinSelect'])) {
  $CoinValueSl = $_POST['CoinSelect'];

}
if (isset($_POST['NumbeSelect'])) {
  $NumberValueSl = $_POST['NumbeSelect'];
}


?>