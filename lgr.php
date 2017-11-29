<?php
session_start();
ob_start();
require_once ('database.php');
require_once('navbar.php');
    if(isset($_GET['lg'])){
        if($_GET['lg']=='false1'){
            echo "<script>alert('Your Are Not Logged In Please Login To Continue');</script>";
        }
        if($_GET['lg']=='invalid'){
            echo "<script>alert('Invalid Username or Password');</script>";
        }
    }
    if(isset($_GET['rg'])){
        if($_GET['rg']=='false1'){
            echo "<script>alert('Couldnot Process Your Request Please Try Again');</script>";
        }
        if($_GET['rg']=='true1'){
            echo "<script>alert('Successfully Registered');</script>";
        }
    }
?>
<div class="w3-third w3-red">
    <h2 style="
    color: rgba(54, 11, 76, 0.75);
">Register</h2>
    <form class="w3-container" method="POST" action="register.php">
        <p>
            <label>Full Name : </label>
            <input class="w3-input" type="text" name="fullname">
        </p>
        <p>
            <label>Username : </label>
            <input class="w3-input" type="text" name="username">
        </p>
        <p>
            <label>Password : </label>
            <input class="w3-input" type="password" name="password">
        </p>
        <p>
            <label>Phone Number : </label>
            <input class="w3-input" type="number" name="phone">
        </p>
        <p>
            <label>Email : </label>
            <input class="w3-input" type="email" name="email">
        </p>
        <p>
            <label>Postal Address : </label>
            <input class="w3-input" type="text" name="address">
        </p>
        <p>
            <label>Gender </label>
            <select class="w3-input" name="gender">
                <option >Male</option>
                <option>Female</option>
            </select>
        </p>
        <p>
            <label>Tell Us Why did you Register With us ? : </label>
            <textarea class="w3-input" name="description"></textarea>
        </p>
        <br>
        <p>
            <input class="w3-button w3-teal w3-padding-large w3-hover-black" type="submit" name="register" value="Register">
        </p>
    </form>
</div>
<div class="w3-third w3-green">
    <img src="images/lgr.jpeg" style="max-width: 448px;">

</div>
<div class="w3-third w3-blue">
    <h2 style="color:#960b0b;">Login</h2>
    <form class="w3-container" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>
            <label>Username : </label>
            <input class="w3-input" type="text" name="username">
        </p>
        <p>
            <label>Password : </label>
            <input class="w3-input" type="password" name="password">
        </p>
        <p>
            <label>Remember Me : </label>
            <input type="checkbox" name="remember">
        </p>
        <br>
        <p>
            <input class="w3-button w3-teal w3-padding-large w3-hover-black" type="submit" name="login" value="Login">
        </p>
        <br>
        'Adventure'. At the <quote style="color:lightsalmon;">Woodlands Away</quote> we understand that it means different things to different people. For some it’s the chance to mingle with the natives and othersit’s pushing their physical limits, climbing that mountain or chasing a foodie trail. We make it possible for everyone to get out of their comfort zone and #DoTheDIfferent™. Whatever your travel style may be, you’ll find that our itineraries are designed to deliver adventure through activities and experiences hand picked by our specialist team. Now you choose what adventure means to you.If you are bitten by the travel bug and simply can’t wait to get on your next break, we suggest you start here. Browse through our small group trips that are coming up the next few weeks, choose your adventure, pack up and just go.No painful research and planning, no waiting for friends and family to come around and no worries - just a whole lot of fun (that’s the one thing we are totally serious about)!
    </form>
</div>
<div class="clearfix"></div>

<?php
require_once ('footer.php');
?>
</body>
</html>
<?php
if(isset($_POST['login'])){
    $sql = "select username, password from `users`";
    $query = mysqli_query($connex,$sql);

    while($row=mysqli_fetch_assoc($query)){
        if($row['username']==$_POST['username'] && $row['password']==md5($_POST['password'])){
            $_SESSION['username']=$row['username'];
            header('location:usrloggedin.php');
        }
        else{
            header('location:lgr.php?lg=invalid');
        }
    }

}
?>

