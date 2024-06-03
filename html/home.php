<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <!-- swiper css link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
 />
    <!-- css link  -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
 <!-- header section starts -->
 <header class="header">
    <a href="#" class="logo"><img class="image1" src="../img/logo.png" alt="umbb_logo" ></a>
    <nav class="navbar">
    <div id="close-navbar" class="fas fa-times"></div>
    <a href="home.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    </nav>

    <div class="icons">
    <div id="menu-btn" class="fas fa-bars"></div>
    </div>
 </header>
 <!-- header section end -->
    
  











 
    





























<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <section class="swiper-slide slide">
              <video src="../img/7945188-hd_1920_1080_25fps.mp4" autoplay loop muted playsinline></video>
             <div class="content">
                <h3>Find Your PFE Subject</h3>
                <p>M'hamed Bougara University of Boumerdes Department informatique</p>
                <a href="#youare" class="btn">Login</a>
             </div>
            </section>

            <section class="swiper-slide slide">
              <video src="../img/8061028-hd_1920_1080_25fps.mp4" autoplay loop muted playsinline></video>
                <div class="content">
                   <h3>Find Your PFE Subject</h3>
                   <p>M'hamed Bougara University of Boumerdes Department informatique</p>
                   <a href="#youare" class="btn">Login</a>
                </div>
               </section>

               <section class="swiper-slide slide">
                <video src="../img/7945684-hd_1920_1080_25fps.mp4" autoplay loop muted playsinline></video>
                <div class="content">
                   <h3>Find Your PFE Subject</h3>
                   <p>M'hamed Bougara University of Boumerdes Department informatique</p>
                   <a href="#youare" class="btn">Login</a>
                </div>
               </section>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- home section end -->

<!-- you are content starts -->
<section class="subjects" id="youare">
<h1 class="heading">Choose your type of login</h1>
<div class="box-container">
   <div class="box">
     <img src="../img/boy on graduation-rafiki.png" alt="student" style="width: 150px;">
     <h3>Student</h3>
     <a href="login.php" class="btn">Login</a>
   </div> 

   <div class="box">
    <img src="../img/Professor-bro.png" alt="teacher" style="width: 150px;">
    <h3>Teacher</h3>
    <a href="loginProf.php" class="btn">Login</a>
  </div> 
  <div class="box">
    <img src="../img/Admin-bro.png" alt="admin" style="width: 150px;">
    <h3>Admin</h3>
    <a href="loginAdmin.php" class="btn">Login</a>   
  </div> 
</div>
</section>
<!-- you are content ends -->

<!-- account form section starts -->
<!-- <div class="acount-form">
<div class="buttons">
<span class="btn login-btn">login</span>
<span class="btn login-btn">register</span>
</div>
<form action="" class="login-form">
<div class="img"><img src="../img/avatar.svg" alt="" style="width: 70px;"></div>
<h3>Welcome</h3>
<input type="text" placeholder="enter your matricule" class="box">
<input type="password" placeholder="enter your matricule" class="box">
<input type="submit" value="login" class="btn">

</form>
</div> -->
<!-- account form section end -->











<!-- footer section starts -->
 <section class="footer">
   <div class="box-container">

    <div class="box">
        <h3><img src="../img/logo.png" alt="umbb-logo" style="width: 30px;">UMBB</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus facilis modi doloribus laboriosam mollitia deleniti dignissimos esse nihil tenetur est optio illum, praesentium .</p>
        <div class="share">
        <a href="https://www.facebook.com/profile.php?id=100064557374968" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>
    <div class="box">
    <h3>Quick links</h3>
    <a href="home.html" class="link">Home</a>
    <a href="about.html" class="link">About</a>
    <a href="home.html" class="link">You are?</a>
    <a href="home.html" class="link">Contact</a>
    </div>

    <div class="box">
    <h3>useful links</h3>
    <a href="#" class="link">Help center</a>
    <a href="#" class="link">Ask questions</a>
    <a href="#" class="link">Send feedback</a>
    <a href="#" class="link">Private policy</a>
    <a href="#" class="link">Terms of use</a>
    </div>

    <div class="box">
    <h3>newsletter</h3>
    <p>Subscribe for latest updates </p>
    <form action="">
    <input type="email" name="" placeholder="enter your email" id="" class="email">
    <input type="submit" value="subscribe" class="btn">
    </form>
    </div>
   </div> 
   <div class="credit">
    Created by <span>trio.KHM</span></div>
 </section>
<!-- footer section end -->




<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    <!-- custom js file  -->
    <script src="../js/script.js"></script>
</body>
</html>