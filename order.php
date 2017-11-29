<?php
session_start();
ob_start();
$coup=array('0a0b0c0d','1a1b1c1d', '2a2b2c2d', '3a3b3c3d');
if(isset($_SESSION['username'])){
    if(isset($_POST['ori'])){
        $name = "Original Cabin";
        $date = $_POST['ori-date'];
        $days = $_POST['ori-day'];
        $guests = $_POST['ori-guest'];
        $price = 79;
        $coupon = $_POST['coupon'];
        foreach($coup as $copn){
            if($copn==$coupon){
                $price = $price - ((10/100)*$price);
            }
        }
        book_1($name,$date,$days,$guests,$price);
    }
    if(isset($_POST['lux'])) {
        $name = "Luxury Cabin";
        $date = $_POST['lux-date'];
        $days = $_POST['lux-day'];
        $guests = $_POST['lux-guest'];
        $price = 10;
        $coupon = $_POST['coupon'];
        foreach($coup as $copn){
            if($copn==$coupon){
                $price = $price - ((10/100)*$price);
            }
        }
        book_1($name,$date,$days,$guests,$price);
    }
    if(isset($_POST['cont'])){
        $name = "Contemporary Cabin";
        $date = $_POST['cont-date'];
        $days = $_POST['cont-day'];
        $guests = $_POST['cont-guest'];
        $price = 25;
        $coupon = $_POST['coupon'];
        foreach($coup as $copn){
            if($copn==$coupon){
                $price = $price - ((10/100)*$price);
            }
        }
        book_1($name,$date,$days,$guests,$price);
    }
}
else{
    header('location:lgr.php?lg=false1');
}
function book_1($type,$date,$days,$guests,$price){
    require_once ('database.php');
    $u = $_SESSION['username'];
    $sql = "insert into `userbookings` (`id`,`type`,`date`,`days`,`guests`,`price`,`customer_username`) values('auto','$type','$date','$days','$guests','$price','$u')";
    if(mysqli_query($connex,$sql)){
        header('location:index.php?bk=true1');
    }
    else{
        header('location:index.php?bk=false1');
    }
}
?>
