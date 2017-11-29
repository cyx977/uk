<?php
session_start();
ob_start();
require_once ('database.php');
if(isset($_GET['lg'])){
    if($_GET['lg']=='true1'){
        echo "<script>alert('Successfully Logged Out!');</script>";
    }
}
if(isset($_GET['bk'])){
    if($_GET['bk']=='true1'){
        echo "<script>alert('Successfully Booked!');</script>";
    }
    if($_GET['bk']=='false1'){
        echo "<script>alert('Couldnot Book. Try Again later.');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<title>Woodlands Away</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css.css">
<link rel="stylesheet" href="assets/google.css">
<link rel="stylesheet" href="assets/fontawesome.css">
<script src="assets/jquery3.2.1.js"></script>

<style>
    .w3-spin {
        animation: w3-spin 12s infinite linear;
    }
    *{
        margin:0;
        padding:0;
    }
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
    nav ul li a{
        float:left;
        padding:16px;
        display:block;
        text-decoration: none;
    }
    nav ul li a:hover{
        background-color: firebrick;
    }
    nav ul li{
        list-style-type:none;
    }
    .clearfix{
        clear:both;
    }
    #logo img{
        float:left;
        width:50%;
    }
</style>
<body style="background-color:#4caf50;">
<div class="navbar">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a> </li>
            <li><a href="services.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="lgr.php">Login & Register</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="usrloggedin.php">Members Area</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</div>
<div class="clearfix"></div>
<div class="w3-display-container mySlides" id="headBanner">
    <img class="bannerSlide w3-animate-left" src="images/1.jpeg" style="width:100%">
    <img class="bannerSlide w3-animate-right" src="images/2.jpeg" style="width:100%">
    <img class="bannerSlide w3-animate-left" src="images/3.jpeg" style="width:100%">
    <img class="bannerSlide w3-animate-right" src="images/4.jpeg" style="width:100%">
    <img class="bannerSlide ww3-animate-left" src="images/5.jpeg" style="width:100%">
    <div class="w3-display-bottomright w3-container w3-padding-16 w3-black w3-spin">
        Welcome to Woodlands Away!
    </div>
</div>
<div class="w3-green w3-center w3-padding-16">
    <div class="textSlide">
        <h4 class="w3-center w3-panel">Planning for a weekend ? We have the best Plans for you. </h4>
    </div>
</div>
<!-- Pricing Tables -->
<div>
    <?php
    $id=1;
    $sql = "select * from schemes where id=$id";
    $query = mysqli_query($connex,$sql);
    $result = mysqli_fetch_assoc($query);
    $id++;
    ?>
    <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32"><?php echo $result['title']; ?></li>
            <li class="w3-padding-16">
                <img src="images/luxury.jpeg">
            </li>
            <li class="w3-padding-16">
                <h4><?php echo $result['k1']; ?></h4>
                <h4><?php echo $result['k2']; ?></h4>
                <h4><?php echo $result['k3']; ?></h4>
                <h4><?php echo $result['k4']; ?></h4>
                <h4><?php echo $result['k5']; ?></h4>
            </li>
            <li class="w3-padding-16">
                <p><?php echo $result['description']; ?></p>
            </li>
            <li class="w3-padding-16">
                <h2>£ <?php echo $result['price']; ?></h2>
                <span class="w3-opacity">Per Night</span>
            </li>
            <form method="POST" action="order.php">
                <li class="w3-padding-16">
                    <table>
                        <tr>
                            <td>
                                Starting From :
                            </td>
                            <td>
                                <input type="date" name="lux-date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Number Of Days :
                            </td>
                            <td>
                                <input type="number" style="width:48px;" name="lux-day" required min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Number Of Guests :
                            </td>
                            <td>
                                <input type="number" style="width:48px;" name="lux-guest" required min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Discount Code :
                            </td>
                            <td>
                                <input type="text" name="coupon" placeholder="Enter Your Discount Coupon Here" title="Get upto 10% discount with our discount codes">
                            </td>
                        </tr>
                    </table>
                </li>

                <li class="w3-light-grey w3-padding-24">
                    <input type="submit" value="Book Now" name="lux" class="w3-button w3-teal w3-padding-large w3-hover-black">
                </li>
            </form>
        </ul>
    </div>
    <?php
    $sql = "select * from schemes where id=$id";
    $query = mysqli_query($connex,$sql);
    $result = mysqli_fetch_assoc($query);
    $id++
    ?>
    <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32"><?php echo $result['title']; ?></li>
            <li class="w3-padding-16">
                <img src="images/luxury.jpeg">
            </li>
            <li class="w3-padding-16">
                <h4><?php echo $result['k1']; ?></h4>
                <h4><?php echo $result['k2']; ?></h4>
                <h4><?php echo $result['k3']; ?></h4>
                <h4><?php echo $result['k4']; ?></h4>
                <h4><?php echo $result['k5']; ?></h4>
            </li>
            <li class="w3-padding-16">
                <p><?php echo $result['description']; ?></p>
            </li>
            <li class="w3-padding-16">
                <h2>£ <?php echo $result['price']; ?></h2>
                <span class="w3-opacity">Per Night</span>
            </li>
            <form method="POST" action="order.php">
                <li class="w3-padding-16">
                    <table>
                        <tr>
                            <td>
                                Starting From :
                            </td>
                            <td>
                                <input type="date" name="cont-date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Number Of Days :
                            </td>
                            <td>
                                <input type="number" style="width:48px;" name="cont-day" required min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Number Of Guests :
                            </td>
                            <td>
                                <input type="number" style="width:48px;" name="cont-guest" required min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Discount Code :
                            </td>
                            <td>
                                <input type="text" name="coupon" placeholder="Enter Your Discount Coupon Here" title="Get upto 10% discount with our discount codes">
                            </td>
                        </tr>
                    </table>
                </li>

                <li class="w3-light-grey w3-padding-24">
                    <input type="submit" value="Book Now" name="cont" class="w3-button w3-teal w3-padding-large w3-hover-black">
                </li>
            </form>
        </ul>
    </div>
    <?php
    $sql = "select * from schemes where id=$id";
    $query = mysqli_query($connex,$sql);
    $result = mysqli_fetch_assoc($query);
    $id++;
    ?>
    <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
            <li class="w3-black w3-xlarge w3-padding-32"><?php echo $result['title']; ?></li>
            <li class="w3-padding-16">
                <img src="images/luxury.jpeg">
            </li>
            <li class="w3-padding-16">
                <h4><?php echo $result['k1']; ?></h4>
                <h4><?php echo $result['k2']; ?></h4>
                <h4><?php echo $result['k3']; ?></h4>
                <h4><?php echo $result['k4']; ?></h4>
                <h4><?php echo $result['k5']; ?></h4>
            </li>
            <li class="w3-padding-16">
                <p><?php echo $result['description']; ?></p>
            </li>
            <li class="w3-padding-16">
                <h2>£ <?php echo $result['price']; ?></h2>
                <span class="w3-opacity">Per Night</span>
            </li>
            <form method="POST" action="order.php">
                <li class="w3-padding-16">
                    <table>
                        <tr>
                            <td>
                                Starting From :
                            </td>
                            <td>
                                <input type="date" name="ori-date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Number Of Days :
                            </td>
                            <td>
                                <input type="number" style="width:48px;" name="ori-day" required min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Number Of Guests :
                            </td>
                            <td>
                                <input type="number" style="width:48px;" name="ori-guest" required min="1">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Discount Code :
                            </td>
                            <td>
                                <input type="text" name="coupon" placeholder="Enter Your Discount Coupon Here" title="Get upto 10% discount with our discount codes">
                            </td>
                        </tr>
                    </table>
                </li>

                <li class="w3-light-grey w3-padding-24">
                    <input type="submit" value="Book Now" name="ori" class="w3-button w3-teal w3-padding-large w3-hover-black">
                </li>
            </form>
        </ul>
    </div>
</div>
<?php
require_once ('footer.php');
?>
</body>
<script>
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("bannerSlide");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 2 seconds
    }
</script>
</html>

