<?php
session_start();
ob_start();
require_once ('navbar.php');
if(isset($_GET['up'])){
    if($_GET['up']=='true1'){
        echo "<script>alert('Successfully Updated');</script>";
    }
    if($_GET['up']=='false1'){
        echo "<script>alert('Couldnot Update Try Again Later');</script>";
    }
}
require_once ('database.php');
if(isset($_SESSION['username'])){
    //loggedin show this page;
}
else{
    //not logged in redirect to login page;
    header('location:lgr.php?lg=false1');
}
if(isset($_POST['logout'])){
    logout();
}
$username = $_SESSION['username'];
$sql = "select * from `uk`.`users` where username='$username'";
$sql = mysqli_query($connex,$sql);
$row = mysqli_fetch_assoc($sql);
?>

<div class="w3-container w3-red">
    <h2 style="
    color: rgba(54, 11, 76, 0.75);
">Update</h2>
    <form class="w3-container" method="POST" action="register.php">
        <p>
            <label>Full Name : </label>
            <input class="w3-input" type="text" name="fullname" value="<?php echo $row['Fullname']; ?>">
        </p>
        <p>
            <label>Username : </label>
            <input class="w3-input" type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly>
        </p>
        <p>
            <label>Password : </label>
            <input class="w3-input" type="password" name="password">
        </p>
        <p>
            <label>Phone Number : </label>
            <input class="w3-input" type="number" name="phone"value="<?php echo $row['Phone']; ?>">
        </p>
        <p>
            <label>Email : </label>
            <input class="w3-input" type="email" name="email" value="<?php echo $row['Email']; ?>">
        </p>
        <p>
            <label>Postal Address : </label>
            <input class="w3-input" type="text" name="address" value="<?php echo $row['Postal']; ?>">
        </p>
        <p>
            <label>Gender </label>
            <select class="w3-input" name="gender">
                <option <?php if($row['Gender']=='Male'){echo "selected=selected";}?>>Male</option>
                <option <?php if($row['Gender']=='Female'){echo "selected=selected";}?>>Female</option>
            </select>
        </p>
        <p>
            <label>Tell Us Why did you Register With us ? : </label>
            <textarea class="w3-input" name="description"><?php echo $row['Description']; ?></textarea>
        </p>
        <br>
        <p>
            <input class="w3-button w3-teal w3-padding-large w3-hover-black" type="submit" name="update" value="Update">
        </p>
    </form>
</div>
<div class="clearfix"></div>
<?php
require_once ('footer.php');
?>
</body>
</html>
<!--form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <button type="submit" name="logout">Logout</button>
</form>
