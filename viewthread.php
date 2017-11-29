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
$sql="select * from forumpost";
$query=mysqli_query($connex,$sql);
if(mysqli_num_rows($query)>0){
    echo "<table class='w3-table w3-border w3-centered w3-hoverable'>";
    echo "<tr class='w3-red'><th>Post Id</th><th>Posted By</th><th>Thread Title</th><th>Content</th></tr>";
      while($row=mysqli_fetch_assoc($query)){

          echo "<tr>";
            echo "<td>";
                echo $row['id'];
            echo "</td>";
            echo "<td>";
                echo $row['posted_by'];
            echo "</td>";
            echo "<td>";
                ?>
<a href="viewindividual.php?id=<?php echo $row['id']; ?>">
    <?php
                echo $row['title']."</a>";
            echo "</td>";
            echo "<td>";
              echo $row['content'];
            echo "</td>";
          echo "</tr>";
      }
    echo "</table>";
}
    if(isset($_POST['logout'])){
        logout();
    }
?>
    <?php
    require_once ('footer.php');
    ?>
