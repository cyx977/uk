<?php
ob_start();
session_start();
if(isset($_SESSION['admin'])){
    require_once ('../database.php');
    require_once ('navbar.php');
    $sql = "select * from userbookings,users where userbookings.customer_username = users.Username";
    $query=mysqli_query($connex,$sql);
    $i = 1;
    if(mysqli_num_rows($query)>0) {
        echo "<table class='w3-table w3-border w3-centered w3-hoverable'>";
        echo "<tr class='w3-red'><th>Sn</th><th>Type</th><th>Booked By</th><th>Phone Number</th><th>Starting From</th><th>No. of Days</th><th>No. of Guests</th><th>Ticket Status</th><th>Price Per Night</th></tr>";
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>";
            echo $i;
            $i++;
            echo "</td>";
            echo "<td>";
            echo $row['type'];
            echo "</td>";
            echo "<td>";
            echo $row['customer_username'];
            echo "</td>";
            echo "<td>";
            echo $row['Phone'];
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
            echo "£ " . $row['price'];
            $pp = +$row['price'];
            echo "</td>";

            echo "</tr>";
        }
        echo "</table>";
    }
}
else{
    header('location:index.php?lg=invalidaccess');
}
?>