<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        >
    </script>
    <title> Login & Sing up</title>
    <link rel="stylesheet" href="../css/loginAdmin.css">
    </head>
    <body>
    <!-- header section starts -->
 <header class="header">
  <a href="#" class="logo"><img class="image1" src="../img/logo.png" alt="umbb_logo"></a>
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


        <div class="container">
            <div class="forms-container">
            <div class="signin-signup">
            <form action="loginConfig.php" method="POST" class="sign-in-form">
    <h2 class="title">Login</h2>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="text" name="email" placeholder="Email" required>
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <input type="submit" value="Login" class="btn solid" name="signin">
</form>
                        <form action="#" class="sign-up-form">
                            <h2 class="title">Sign up</h2>

                            <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="text" placeholder="ID" />
                            </div>
                            <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="text" placeholder="First Name" />
                            </div>
                            <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="text" placeholder="Second Name" />
                            </div>
                            <div class="input-field">
                              <i class="fas fa-envelope"></i>
                              <input type="email" placeholder="Email" />
                            </div>
                            
                            <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Password" />
                            </div>
                           

                            <input type="submit" class="btn" value="Sign up" />
                    </form>
                        </div>
                    </div>
                    <div class="panels-container">
                        <div class="panel left-panel">
                          <div class="content">
                            <h3>New here?</h3>
                            <p>
                              Hello. For full access , take a minute to create a personal account on this site.

                            </p>
                            <button class="btn transparent" id="sign-up-btn">
                              Sign up
                            </button>
                          </div>
                          <img src="../img/Buffer-pana.png" class="image" alt="" />
                        </div>
                        <div class="panel right-panel">
                          <div class="content">
                            <h3>One of us ?</h3>
                            <p>
                                Welcome back! It's great to see you again. Dive in and make the most of your membership.

                            </p>
                            <button class="btn transparent" id="sign-in-btn">
                              Login
                            </button>
                          </div>
                          <img src="../img/Wall post-amico.png" class="image" alt="" />
                        </div>
                      </div>
                    </div>
                    <section class="footer">
                      <div class="box-container">
                   
                       <div class="box">
                           <h3><img src="../img/logo.png" alt="umbb-logo" style="width: 30px;">UMBB</h3>
                           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus facilis modi doloribus laboriosam mollitia deleniti dignissimos esse nihil tenetur est optio illum, praesentium .</p>
                           <div class="share">
                           <a href="https://www.facebook.com/depinf" class="fab fa-facebook-f"></a>
                           <a href="#" class="fab fa-twitter"></a>
                           <a href="#" class="fab fa-instagram"></a>
                           <a href="#" class="fab fa-linkedin"></a>
                           </div>
                       </div>
                       <div class="box">
                       <h3>quick links</h3>
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
                       <h3>Newsletter</h3>
                       <p>Subscribe for latest updates </p>
                       <form action="">
                       <input type="email" name="" placeholder="enter your email" id="" class="email1">
                       <input type="submit" value="subscribe" class="btn1">
                       </form>
                       </div>
                      </div> 
                      <div class="credit">
                       Created by <span>trio.KHM</span></div>
                    </section>
                   <!-- footer section end -->
                   <!-- script js -->
                    <script src="../js/login.js"></script>
    </body>
</html>