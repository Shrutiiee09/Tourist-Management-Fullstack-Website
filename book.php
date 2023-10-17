
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    if (isset($_POST['send'])) {
        // Handle form submission and database processing here
        // If the booking is successful, then redirect
        header("Location: booking_success.php");
        exit(); // Make sure to exit after the redirect
    }
    ?>
  <!-- header section -->
<section class="header">
    <a href="home.php" class="logo">TravelWithUs</a>

    <nav class="navbar">
    <a href="home.php">home</a>
    <a href="about.php">about</a>
    <a href="package.php">package</a>
    <a href="book.php">book</a>
    
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section end -->

<div class="heading" style="background: url(home-bg11.jpg) no-repeat">
    <h1>Book Now</h1>
</div>
<?php
    if (isset($_POST['send'])) {
        // Handle form submission and database processing here
        // If the booking is successful, then redirect
        header("Location: booking_success.php");
        exit(); // Make sure to exit after the redirect
    }
    ?>
<!-- booking section  -->
<section class="booking">

    <h1 class="heading-title">book your trip</h1>
 
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>name : </span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputbox">
                <span>email : </span>
                <input type="text" placeholder="enter your email" name="email">
            </div>
            <div class="inputbox">
                <span>phone : </span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputbox">
                <span>address : </span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputbox">
                <span>where to : </span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputbox">
                <span>how many : </span>
                <input type="number" placeholder="how many guests" name="guests">
            </div>
            <div class="inputbox">
                <span>arrivals : </span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputbox">
                <span>leaving : </span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>

</section>
<!-- booking section end -->


<!-- footer section  -->
<section class="footer" style="background: url(footerimg.jpg) no-repeat">
    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class=" fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class=" fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class=" fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class=" fas fa-angle-right"></i>book</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class=" fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class=" fas fa-angle-right"></i>about us</a>
            <a href="#"><i class=" fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class=" fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class=" fas fa-phone"></i>+123-456-7890</a>
            <a href="#"><i class=" fas fa-phone"></i>+111-222-3333</a>
            <a href="#"><i class=" fas fa-envelope"></i>shrutibadjate@gmail.com</a>
            <a href="#"><i class=" fas fa-map"></i>nagpur, india - 423106</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i>linkedin</a>
        </div>
    </div>

    <div class="credit">created by <span>shruti</span> | all rights reserved! </div>
</section>
<!-- footer section end -->



   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
   <script src="script.js"></script>

</body>
</html>