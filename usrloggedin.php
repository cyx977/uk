<?php
session_start();
ob_start();
require_once ('database.php');
require_once ('navbar.php');
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
?>
<html>
    <head>

    </head>
    <body>
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    We are glad to have you as our member
        <a href="edituserprofile.php"><button>Edit Profile</button></a>
        <a href="userbookings.php"><button>View my bookings</button></a>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>
    </body>
</html>
