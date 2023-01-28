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
$userPw = $_POST['playerPw'];

$sqlGetCoin = "SELECT CoinAmount from users WHERE UserName = '$username' AND PWord = '$userPw'";
$getCoinResult = $conn->query($sqlGetCoin);

if (mysqli_num_rows($getCoinResult) > 0) {
    while($row = $getCoinResult->fetch_assoc()){
        $coinAmount += $row['CoinAmount'];
     }
    $sqlAddcoinQuery = "UPDATE users SET CoinAmount ='$coinAmount' WHERE UserName = '$username'";        
    if($conn->query($sqlAddcoinQuery) === TRUE){

        // $sqlGetCoin = "SELECT CoinAmount from users WHERE UserName = '$username'";
        // $coinAm = $conn->query($sqlGetCoin);
        // echo $coinAm;
        $_SESSION['coinAmount'] = $coinAmount;
        echo '
        <div class="loader-overlay">
        <div class="popup-spinner">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <div class="text-center">
                <h4>Coin Added</h4>
                <br>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100"
                  aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>';
      echo "<meta http-equiv='refresh' content='1;url=../home.php'>";
    }



}else{
    echo '
    <div class="loader-overlay">
    <div class="popup-spinner">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <div class="text-center">
            <h4>Something went Wrong check password</h4>
            <br>
          </div>
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100"
              aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>';
  echo "<meta http-equiv='refresh' content='2;url=../addCoin.html'>";
}


?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>