<?php
ob_start();
session_start();
require_once ('database.php');
if(isset($_POST['register'])) {
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['gender']) && !empty($_POST['description'])) {
        $name = $_POST['fullname'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $description = $_POST['description'];
        $sql="insert into `users` values('auto','$name','$username','$password','$phone','$email','$address','$gender','$description')";
        if(mysqli_query($connex,$sql)){
            header('location:lgr.php?rg=true1');
        }
        else {
            header('location:lgr.php?rg=false1');
        }
    }
    else {
        header('location:lgr.php?rg=false1');
    }
}
else if($_POST['update']){
    if(isset($_SESSION['username'])){
        $name = $_POST['fullname'];
        $username = $_SESSION['username'];
        $password = md5($_POST['password']);
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $description = $_POST['description'];
        $sql = "update `users` set Fullname='$name', Password='$password', Phone='$phone', Email='$email', Postal='$address', Gender='$gender', Description='$description'  where Username='$username'";
        if(mysqli_query($connex,$sql)){
            //header('location:edituserprofile.php?up=true1');
            echo "updated";
        }
        else {
            //header('location:edituserprofile.php?up=false1');
            echo "not updated";
        }
    }
    else {
        header('location:edituserprofile.php?up=false1');
    }
}
else {
    header('location:lgr.php?rg=false1');
}