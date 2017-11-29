<?php
$serverss = "localhost";
$password111 = "recharge@np1";
$user111 = "recharge_uktest";
$dbnam = "recharge_uk";
$connex = mysqli_connect($serverss,$user111,$password111,$dbnam);
if($connex->connect_error){
    die ("Couldnot Establish Connection with the Database");
}
function logout(){
    session_destroy();
    header('location:index.php?lg=true1');
}
