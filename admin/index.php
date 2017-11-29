<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css.css">
<body style="margin:0 auto;width:50%;">

<div class="w3-container">

    <div class="w3-card-4">
        <div class="w3-container w3-green">
            <h2>Admin Login</h2>
        </div>

        <form class="w3-container" METHOD="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <p>
                <input class="w3-input" type="text" name="username" placeholder="Please Enter your Username">
                <label>First Name</label>
            </p>
            <p>
                <input class="w3-input" type="password" name="password" placeholder="Please Enter your Password">
                <label>Last Name</label>
            </p>
            <input class="w3-button w3-green" type="submit" name="login" value="Login">
        </form>
    </div>
</div>

</body>
<?php
if(isset($_SESSION['admin'])){
    header('location:adminloggedin.php');
}
if(isset($_POST['login'])){
    require_once ('../database.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select username, password, flag from `users`";
    $query = mysqli_query($connex,$sql);

    while($row=mysqli_fetch_assoc($query)){
        if($row['username']==$_POST['username'] && $row['password']==md5($_POST['password']) && $row['flag']==1){
            session_start();
            $_SESSION['admin']=$row['username'];
            header('location:adminloggedin.php');
        }
        else{
            header('location:index.php?lg=invalid');
        }
    }
}
if(isset($_GET['lg'])){
    if($_GET['lg']=='invalid'){
        echo "<script>alert('Invalid Admin Login');</script>";
    }
    if($_GET['lg']=='invalidaccess'){
        echo "<script>alert('Unauthorised Access Please Login to continue.');</script>";
    }
    if($_GET['lg'] == 'logout'){
        echo "<script>";
        echo "alert('Successfully Logged Out!')";
        echo "</script>";
    }
}
?>
</html>
