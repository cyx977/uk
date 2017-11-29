<html>
<head><title>Woodlands Away</title>
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
</head>
<body style="background-color:#4caf50;">
<div class="navbar">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about-us.php">About Us</a> </li>
            <li><a href="services.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="lgr.php">Login &amp; Register</a></li>
            <li><a href="forum.php">Forum</a></li>
            <li><a href="usrloggedin.php">Members Area</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</div>
<div class="clearfix"></div>
<div class="w3-display-container mySlides" id="headBanner">
    <img class="bannerSlide w3-animate-left" src="images/1.jpeg" style="width: 100%; display: none;">
    <img class="bannerSlide w3-animate-right" src="images/2.jpeg" style="width: 100%; display: block;">
    <img class="bannerSlide w3-animate-left" src="images/3.jpeg" style="width: 100%; display: none;">
    <img class="bannerSlide w3-animate-right" src="images/4.jpeg" style="width: 100%; display: none;">
    <img class="bannerSlide ww3-animate-left" src="images/5.jpeg" style="width: 100%; display: none;">
    <div class="w3-display-bottomright w3-container w3-padding-16 w3-black w3-spin">
        Welcome to Woodlands Away!
    </div>
</div>
<div class="w3-green w3-center w3-padding-16">
    <div class="textSlide">
        <h4 class="w3-center w3-panel">Image Gallery</h4>
    </div>
</div>
<!-- Pricing Tables -->

<footer class="w3-padding-32 w3-black">
    <div class="w3-xlarge w3-padding-16 w3-center">
        <iframe src="calendar.php" style="min-height:376px;" scrolling="no" width="100%;" frameborder="0"></iframe>
        <h5>Find Us On</h5>
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p>Designed &amp; Developed by Abishek Adhikari</p>
        <p>admin@wodlands.uk</p>
        <p>+61-78945155, +91-478891245 </p>
        <p>57 Bury Rd HANDFORTH SK9 8PD</p>
    </div>
</footer>
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


</body>