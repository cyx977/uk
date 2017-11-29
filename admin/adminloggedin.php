<?php
ob_start();
session_start();
if(isset($_SESSION['admin'])){
    require_once ('../database.php');
    require_once ('navbar.php');
    ?>
    <div class="w3-padding-16 w3-orange w3-content">
        <a href="editscheme.php?id=1"><button class="w3-btn w3-black w3-ripple">Edit Scheme 1</button></a>
        <a href="editscheme.php?id=2"><button class="w3-btn w3-black w3-ripple">Edit Scheme 2</button></a>
        <a href="editscheme.php?id=3"><button class="w3-btn w3-black w3-ripple">Edit Scheme 3</button></a>
        <a href="viewbookings.php"><button class="w3-btn w3-black w3-ripple">View All Bookings</button></a>
        <a href="viewcustomers.php"><button class="w3-btn w3-black w3-ripple">View Customers</button></a>
        <button class="w3-btn w3-black w3-ripple">Discount Coupons</button>
        <a href="adminloggedin.php?lgo=1"><button style="display:inline;" class="w3-btn w3-black w3-ripple">Logout</button></a>

    </div>
<?php
    if(isset($_GET['lgo'])){
        session_destroy();
        header('location:index.php?lg=logout');
    }
}
else{
    header('location:index.php?lg=invalidaccess');
}