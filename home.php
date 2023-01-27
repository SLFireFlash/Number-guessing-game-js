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
<body>
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
                    <a class="nav-link active" href="#">Games</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-2 mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navDropDown">
                    <?php
                        session_start();
                        if(!isset($_SESSION['username'])) {
                            header('Location: index.html');
                            exit;}
                        echo strtoupper($_SESSION['username']);
                        ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </nav>

        <div class="gamebody">
            <!-- <div class="number-select">
                <div class="in-num-txt">
                    <p>select your number</p>
                </div>
                <div class="in-num-box">
                    <div class="in-numbers" id="in-num-00">0</div>
                    <div class="in-numbers" id="in-num-01">1</div>
                    <div class="in-numbers" id="in-num-02">2</div>
                    <div class="in-numbers" id="in-num-03">3</div>
                    <div class="in-numbers" id="in-num-04">4</div>
                    <div class="in-numbers" id="in-num-05">5</div>
                    <div class="in-numbers" id="in-num-06">6</div>
                    <div class="in-numbers" id="in-num-07">7</div>
                    <div class="in-numbers" id="in-num-08">8</div>
                    <div class="in-numbers" id="in-num-09">9</div>
                    
                </div>
            </div> -->
            <form action="">
                Enter Your guess
                <input type="text" name="player-number" id="player-in-number">
                <button type="button" id="select-player-number" onclick="SelectInputNumber()">Start Game</button>
                <br>
                Your Number
                <div class="in-numbers" id="user-num"></div>
                <br>
                Game Numbers
                <div class="in-numbers" id="game-num1"></div>
                <div class="in-numbers" id="game-num2"></div>
                <div class="in-numbers" id="game-num3"></div>


            </form>
        </div>
        
        <div class="footer">
            <!-- Footer -->
      <footer class="text-center text-lg-start bg-light text-muted">
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
</body>


</html>