<html>
    <body>
<?php
include "dbconn.php";

$Name = $_POST["Name"];
$userName =$_POST["user-Name"];
$email=$_POST["Email"];
$password=$_POST["Password"];

// echo "<br>";
// echo $Name ."<br>";
// echo $userName . "<br>";
// echo $email . "<br>";
// echo $password . "<br>";
$sqlq = "INSERT INTO users (Name,UserName,Email,PWord) VALUES ('$Name','$userName','$email','$password')";
if($conn->query($sqlq) === TRUE){
    echo "<script>alert('Sign Up Completed.. please login');</script>";
    echo "<meta http-equiv='refresh' content='1;url=../index.html'>";
    
    

}
else{
    echo $conn->error;
}


?>
</body>
<html>