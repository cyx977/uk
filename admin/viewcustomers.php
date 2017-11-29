<?php
ob_start();
session_start();
if(isset($_SESSION['admin'])){
    require_once ('../database.php');
    require_once ('navbar.php');
    $sql = "select * from users where flag='0'";
    $query=mysqli_query($connex,$sql);
    $i=1;
    if(mysqli_num_rows($query)>0) {
        echo "<table class='w3-table w3-border w3-centered w3-hoverable'>";
        echo "<tr class='w3-red'><th>SN</th><th>Id</th><th>Fullname</th><th>Username</th><th>Phone</th><th>Email</th><th>Postal</th><th>Gender</th></tr>";
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>";
            echo $i;
            $i++;
            echo "</td>";
            echo "<td>";
            echo $row['id'];
            echo "</td>";
            echo "<td>";
            echo $row['Fullname'];
            echo "</td>";
            echo "<td>";
            echo $row['Username'];
            echo "</td>";
            echo "<td>";
            echo $row['Phone'];
            echo "</td>";
            echo "<td>";
            echo $row['Email'];
            echo "</td>";
            echo "<td>";
            echo $row['Postal'];
            echo "</td>";
            echo "<td>";
            echo $row['Gender'];
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