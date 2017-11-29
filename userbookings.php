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
if(isset($_GET['up'])){
    if($_GET['up']=='true1'){
        echo "<script>alert('Successfully Updated');</script>";
    }
    if($_GET['up']=='false1'){
        echo "<script>alert('Couldnot Update Try Again Later');</script>";
    }
}
$username=$_SESSION['username'];
$sql = "select * from `userbookings` where customer_username='$username'";




$query=mysqli_query($connex,$sql);
if(mysqli_num_rows($query)>0){
    $i = 0;
    $pp = 0;
    echo "<table class='w3-table w3-border w3-centered'>";
    echo "<tr class='w3-red'><th>Sn</th><th>Type</th><th>Starting From</th><th>No. of Days</th><th>No. of Guests</th><th>Ticket Status</th><th>Price Per Night</th><th>Action</th></tr>";
        while($row=mysqli_fetch_assoc($query)){
            echo "<tr>";
                echo "<td>";
                    echo $i;
                    $i++;
                echo "</td>";
                echo "<td>";
                    echo $row['type'];
                echo "</td>";
                echo "<td>";
                    echo $row['date'];
                echo "</td>";
                echo "<td>";
                    echo $row['days'];
                echo "</td>";
                echo "<td>";
                    echo $row['guests'];
                echo "</td>";
                echo "<td>";
                    echo $row['status'];
                echo "</td>";
                echo "<td>";
                    echo "£ ".$row['price'];
                    $pp =+ $row['price'];
                echo "</td>";
                echo "<td>";
                    ?>
                <a href="updatebooking.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a>
                    <?php

                echo "</td>";

            echo "</tr>";
        }
        echo "<tr><td colspan='6'>Total</td><td colspan='2'>£ ".$pp."</td></tr>";
    echo "</table>";
}
?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <button type="submit" name="logout">Logout</button>
</form>
<?php
require_once ('footer.php');
?>