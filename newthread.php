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
if(isset($_POST['post'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $pb=$_SESSION['username'];
    $sql="insert into forumpost values('auto','$title','$content','$pb')";
    if(mysqli_query($connex,$sql)){
        echo "posted";
    }
    else{
        echo "not posted";
    }
}
?>

    <div class="w3-container w3-blue">
        <h2>Add New Post</h2>
    </div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="w3-container">
    <p><label>Title:</label>
        <input class="w3-input" type="text" name="title">
    </p>
    <p><label>Content:</label>
        <input type="text" name="content" class="w3-input">
    </p>
    <input type="submit" name="post" value="Post">
</form>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <button type="submit" name="logout">Logout</button>
</form>
<?php
require_once ('footer.php');
?>