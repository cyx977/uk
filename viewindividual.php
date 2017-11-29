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
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from forumpost where id=$id";
    $query=mysqli_query($connex,$sql);
    if(mysqli_num_rows($query)>0){
        while($row=mysqli_fetch_assoc($query)){
            ?>
            <div id="thread" class="w3-container w3-red" style="margin:0 auto;border:2px solid black;width:75%;">
                <h6 style="color:#801a1d"><?php echo "Title:- </h6><h2>".$row['title']; ?></h2>
                <div id="content1">
                    <h6 style="color:#801a1d">Content</h6>
                    <h4><?php echo $row['content']; ?></h4>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <textarea style="width:80%;margin:1em;" placeholder="add a comment" name="cmt"></textarea>
                    <input type="submit" value="Comment" name="comment">
                    <div id="comments1">
                        <h3>Comments</h3>
                        <?php
                            $sql1="select * from `comment` where commentfor=$id";
                            $query=mysqli_query($connex,$sql1);
                            if(mysqli_num_rows($query)>0){
                                while($row1=mysqli_fetch_assoc($query)){
                                    echo "<quote style='color:#fbf9ff;'>" .$row1['comment']. "</quote> <sub style='color:#66ffdf;'>Commented by " .$row1['commentby']."</sub><br>";
                                }
                            }
                        ?>
                </form>
                </div>
            </div>
<?php

        }
    }
}
else if(isset($_POST['comment'])){
    $id= $_POST['id'];
    $comment= $_POST['cmt'];
    $us=$_SESSION['username'];
    $sql1="insert into `comment` values('auto','$id','$comment','$us')";
    if(mysqli_query($connex,$sql1)){
        header('location:viewindividual.php?id='.$id);
    }
    else{
        header('location:viewthread.php');
    }
}
else{
    header('location:viewthread.php');
}
?>
<?php
require_once ('footer.php');
?>