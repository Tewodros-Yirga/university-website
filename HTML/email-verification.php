<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Email Verification</title>
  <link rel="shortcut icon" href="../ICONS/graduating.png" type="image/x-icon" />
  <link rel="stylesheet" href="../CSS/email-verification.css" />
</head>

<body>
  <div class="container">
    <h2>Email</h2>
    <p>It's quick and Easy</p>
    <div class="line"></div>
    <form action="" method="post" autocomplete="off">
      <?php
      if (isset($_POST["verify_email"])) {
        $email = $_POST["email"];
        if (!empty($email)) {
          $verification_code = $_POST["verification_code"];

          //connect wit database
          $conn = mysqli_connect("localhost:3306", "root", "Hummingbird21", "dream");
          //mark eamil as verified
          $sql = "UPDATE users SET email_verified_at = NOW() WHERE email = '" . $email . "' AND code = '" . $verification_code . "'";
          $result = mysqli_query($conn, $sql);
          if (mysqli_affected_rows($conn) == 0) {
            $msg = "Verification failed.";
          } else {
            $msg = "You have successfully verified your account.</br> You can log in now ";
          }
        } else {
          $msg = "Enter verification code";
        }
      }
      ?>
      <p style="  font-size: 16px;font-weight:300;color: red;"><?php if (!empty($msg)) {
                                                                  echo $msg;
                                                                  echo '<a href="index.php">Go to Home</a>';
                                                                } ?></p>
      <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required />
      <input type="number" placeholder="Enter verification Code" required name="verification_code" /><br />
      <input type="submit" name="verify_email" value="Verify Email" />
    </form>
  </div>
</body>

</html>