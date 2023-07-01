<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="../ICONS/graduating.png" type="image/x-icon" />
  <title>About us</title>
  <link rel="stylesheet" href="../CSS/style.css" />
  <link rel="stylesheet" href="../CSS/aboutus.css" />
</head>

<body>
  <div class="head-nav">
    <header id="navbar">
      <!-- LOGO IMAGE  -->
      <h2 class="logo">
        <a href="../HTML/index.php">
          <img src="../IMAGES/logo.jpg" width="111px" alt="alternative" />
        </a>
      </h2>
      <!-- NAVIGATION BAR -->
      <nav class="navigation">
        <a href="../HTML/index.php" class="home-link">Home</a>
        <a href="../HTML/aboutus.php" class="aboutus-link">AboutUs</a>
        <button class="btnLogin-popup">Login</button>
      </nav>
    </header>
  </div>
  <section class="body">
    <!-- LOGIN FORM  -->
    <div class="wrapper">
      <span class="icon-close">
        <ion-icon name="close"></ion-icon>
      </span>
      <div class="form-box login">
        <h2>Login</h2>
        <form action="" method="post" autocomplete="off">
          <div class="input-box">
            <span class="icon">
              <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="ema" required />
            <label for="">Email</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="password" required name="pass" id="pass" />
            <label for="">password</label>
            <div id="toggle" onclick="showHidetwo();"></div>
          </div>
          <div class="remember-forgot">
            <label>
              <input id="remember" type="checkbox" />
              Remember me</label>
            <a href="#"> Forgot Password?</a>
          </div>
          <input type="submit" class="btn" value="Login" name="loginbtn" />
          <div class="login-register">
            <p>Don't have an account?<a class="register-link">Register</a></p>
          </div>
        </form>
      </div>
      <!-- REGISTER FORM -->
      <div class="form-box register">
        <h2>Registration</h2>
        <form action="#" method="post" autocomplete="off">
          <div class="input-box input-box2">
            <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" name="userName" required />
            <label for="">UserName</label>
          </div>
          <div class="input-box input-box2">
            <span class="icon">
              <ion-icon name="mail"></ion-icon>
            </span>
            <input type="email" name="email" required />
            <label for="">Email</label>
          </div>
          <div class="input-box input-box2">
            <span class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="password" name="password" id="password" required />
            <label for="">password</label>
            <div id="toggle" onclick="showHideone();"></div>
          </div>
          <div class="remember-forgot">
            <label>
              <input type="checkbox" name="agree" /> I agree to the terms &
              conditions</label>
          </div>
          <input type="submit" class="btn btn-2" name="regbtn" value="Register" />
          <div class="login-register">
            <p>Already have an account?<a class="login-link">Login</a></p>
          </div>
        </form>
      </div>
    </div>
    <div class="vid">
      <video autoplay muted src="../VIDEOS/dream university.mp4" width="1222px"></video>
    </div>
  </section>
  <section class="body2">
    <div class="first-div">
      <div class="mission">
        <div class="imag">
          <img src="../IMAGES/Premium.jpeg" alt="" width="522px" />
        </div>
        <div class="para">
          <h1>Mission</h1>

          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat
            provident cumque sint veniam corporis neque autem totam error
            voluptatibus nemo ducimus cupiditate ab possimus optio aliquid
            amet blanditiis, architecto eum?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat
            provident cumque sint veniam corporis neque autem totam error
            voluptatibus nemo ducimus cupiditate ab possimus optio aliquid
            amet blanditiis, architecto eum?
          </p>
        </div>
      </div>
      <div class="vision">
        <div class="para1">
          <h1>Vision</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
            quia aperiam ea velit! Quas, numquam. Aspernatur nesciunt id
            ducimus veniam, quaerat cupiditate numquam ratione amet odio culpa
            ea, praesentium nemo!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
            quia aperiam ea velit! Quas, numquam. Aspernatur nesciunt id
            ducimus veniam, quaerat cupiditate numquam ratione amet odio culpa
            ea, praesentium nemo!
          </p>
        </div>
        <div class="imm">
          <img src="../IMAGES/background.jpg" width="522px" alt="" />
        </div>
      </div>
    </div>
    <div class="scholar">
      <!-- here goes
        theat there asdklfjasjdfioasdj
      asdfjasiodjfoiasdjfa
    asdfjioasdjfioasdjfs
  asdfjasodjfaiosdjfas
sdjfaiosdjfioasdjf
asdjfioasdjfioajsd -->
    </div>
  </section>
  <footer>
    <div class="contain-foot">
      <div class="col-one">
        <div class="logo-img">
          <a href="../HTML/index.php"><img src="../ICONS/logo.jpg" style="margin-top: 15px" alt="Logo" /></a>
        </div>
        <div></div>
      </div>
      <div class="col-two">
        <div class="useful-links">
          <h2>Useful Links</h2>
          <a href="../HTML/index.php">Home</a>
          <a href="../HTML/aboutus.php">About us</a>
          <div class="navigation">
            <button class="btnLogin-popup b">Login</button>
          </div>
        </div>
        <div class="term-cond">
          <a href="../HTML/terms.php">Terms of Service</a>
          <br />
          <a href="../HTML/privacypolicy.php">Privacy policy</a>
        </div>
      </div>
      <div class="col-three">
        <div class="contact-info">
          <h2>Contact info</h2>
          <address>
            <p>Dream University</p>
            <p>dreamsupport@gmail.com</p>
            <p>+251&nbsp;99&nbsp;999&nbsp;9999</p>
            <p>+251&nbsp;66&nbsp;666&nbsp;6666</p>
          </address>
        </div>
      </div>
    </div>
    <div class="icons">
      <a href="https://www.facebook.com/dreamuniversity">
        <span class="ico">
          <ion-icon class="facebook" name="logo-facebook"></ion-icon>
        </span>
      </a>
      <a href="https://twitter.com/dreamuniversity">
        <span class="ico">
          <ion-icon class="twitter" name="logo-twitter"></ion-icon>
        </span>
      </a>
      <a href="https://api.whatsapp.com/send?phone=+251999999999">
        <span class="ico">
          <ion-icon class="call" name="call-outline"></ion-icon>
        </span>
      </a>
      <a href="https://www.youtube.com/channel/dreamuniversity">
        <span class="ico">
          <ion-icon class="youtube" name="logo-youtube"></ion-icon>
        </span>
      </a>
      <a href="https://www.linkedin.com/in/dreamuniversity>">
        <span class="ico">
          <ion-icon class="ln" name="logo-linkedin"></ion-icon>
        </span>
      </a>
      <a href="https://www.instagram.com/dreamuniversity">
        <span class="ico">
          <ion-icon class="instagram" name="logo-instagram"></ion-icon>
        </span>
      </a>
      <a href="https://www.tiktok.com/@dreamuniversity">
        <span class="ico">
          <ion-icon class="tiktok" name="logo-tiktok"></ion-icon>
        </span>
      </a>
    </div>
    <div class="copy">
      <hr style="margin: 2px" />
      <hr style="margin: 2px; margin-bottom: 15px" />
      <p>
        <span class="copy-sign">&copy</span>&nbsp;2023 Dream University
        Registrar And Alumni Directorate
      </p>
    </div>
  </footer>
  <!-- LINK THE JABASCRIPT -->
  <script src="../JAVASCRIPT/aboutus.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>