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
<body class="bg-dark">
     <div class="wraper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-bg-dark">
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
                        session_start();
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
          <div class="select-items">
            <div class="select-coins">
              <h1><span>SELECT COINS</span></h1>
                <button class="button btn-select-coin p-2" value="50" onclick="hideCoinSelector()" id="btn-select-coin-50"><span>50</span></button>
                <button class="button btn-select-coin p-2" value="100" onclick="hideCoinSelector()" id="btn-select-coin-100"><span>100</span></button>
                <br>
                <button class="button btn-select-coin p-2" value="200" onclick="hideCoinSelector()" id="btn-select-coin-200"><span>200</span></button>
                <button class="button btn-select-coin p-2" value="500" onclick="hideCoinSelector()" id="btn-select-coin-500"><span>500</span></button>

            </div>
            <div class="select-number">
              <h1><span>SELECT NUMBER</span></h1>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="1" id="btn-select-number-1"><span>1</span></button>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="2" id="btn-select-number-2"><span>2</span></button>
              <br>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="3" id="btn-select-number-3"><span>3</span></button>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="4" id="btn-select-number-4"><span>4</span></button>
              <br>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="5" id="btn-select-number-5"><span>5</span></button>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="6" id="btn-select-number-6"><span>6</span></button>
              <br>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="7" id="btn-select-number-7"><span>7</span></button>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="8" id="btn-select-number-8"><span>8</span></button>
              <br>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="9" id="btn-select-number-9"><span>9</span></button>
              <button class="button btn-select-number p-2" onclick="numberSelector()" value="0" id="btn-select-number-0"><span>0</span></button>

            </div>
            <div class="start-game">
              <h1><span>START GAME</span></h1>
              <button class="button btn-select-number p-2"><span>RESTART</span></button>
              <button class="button btn-select-number p-2"><span>START</span></button>

            </div>
          </div>

        </div>
        
        
        <div class="footer">
            <!-- Footer -->
      <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Section: Links  -->
        <section class="">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3"></i>TeamHiru
                </h6>
                <p>
                  Building games for every player.
                </p>
              </div>
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                  Useful links
                </h6>
                <p>
                  <a href="https://youtube.com/c/slfireflash" class="text-reset">Youtube</a>
                </p>
                <p>
                  <a href="https://twitter.com/sl_fireflash" class="text-reset">Twitter</a>
                </p>
                <p>
                  <a href="https://github.com/SlFireFlash" class="text-reset">Github</a>
                </p>
              </div>
              <!-- Grid column -->
      </footer>
      <!-- Footer -->
        </div>
    </div>
   
    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>