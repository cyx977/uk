<?php
session_start();
ob_start();
require_once('database.php');
require_once ('navbar.php');
if(isset($_SESSION['username'])){
    //user logged in. continue in this page
}
else{
    //user not logged in
    header('location:lgr.php?lg=false1');
}


if(isset($_GET['id'])){
    $idd=$_GET['id'];
    $sql="select * from userbookings where id=$idd";
    $query=mysqli_query($connex,$sql);
    if(mysqli_num_rows($query)>0){
        ?>
        <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
            while($row=mysqli_fetch_assoc($query)){
                ?>
                <table>
                    <tr><th>Order Id</th><th>Type</th><th>Date<sub>(Starting From)</sub></th><th>No. of Days</th><th>No. of Guests</th></tr>
                    <tr>
                        <td><input type="number"value="<?php echo $row['id'];?>" name="id" readonly></td>
                        <td>
                            <select name="type">
                                <option <?php if($row['type']=='Luxury Cabin'){echo "selected=selected";} ?>>Luxury Cabin</option>
                                <option <?php if($row['type']=='Contemporary Cabin'){echo "selected=selected";} ?>>Contemporary Cabin</option>
                                <option <?php if($row['type']=='Original Cabin'){echo "selected=selected";} ?>>Original Cabin</option>
                            </select>
                        </td>
                        <td><input type="date" name="date" value="<?php echo $row['date'] ?>"></td>
                        <td><input type="number" name="days" value="<?php echo $row['days']; ?>"></td>
                        <td><input type="number" name="guests" value="<?php echo $row['guests']; ?>"></td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                </table>
                <?php
            }
    }
}
else if(isset($_POST['update'])){
    $id= $_POST['id'];
    $type= $_POST['type'];
    $date= $_POST['date'];
    $days= $_POST['days'];
    $guests= $_POST['guests'];
    $sql="update userbookings set type='$type', date='$date', days='$days', guests='$guests' where id='$id'";
    if(mysqli_query($connex,$sql)){
        //echo "Updated";
        header('location:userbookings.php?up=true1');
    }
    else{
        //echo "not updated";
        header('location:userbookings.php?up=false1');
    }
}
else{
    header('location:lgr.php?lg=false1');
}
?>

<?php
require_once ('footer.php');
?>