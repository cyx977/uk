<?php
session_start();
ob_start();
require_once('database.php');
require_once('navbar.php');
if(isset($_SESSION['username'])){
    //user logged in. continue in this page
}
else{
    //user not logged in
    header('location:lgr.php?lg=false1');
}
if(isset($_POST['logout'])){
    logout();
}
?>







<h1>Welcome to Woodlands Forum</h1>
<a href="viewthread.php"><button>View Threads</button></a>
<a href="newthread.php"><button>Post New Thread</button></a>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <button type="submit" name="logout">Logout</button>
</form>
<?php
require_once ('footer.php');
?>
