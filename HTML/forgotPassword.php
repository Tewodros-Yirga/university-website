<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  <link rel="shortcut icon" href="../ICONS/graduating.png" type="image/x-icon" />
  <link rel="stylesheet" href="../CSS/forgot.css" />
  <?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  if (isset($_POST['forgot_password'])) {
    $email = $_POST['email'];
    $connection = mysqli_connect("localhost:3306", "root", "Hummingbird21", "dream");
    $checkEmail = mysqli_query($connection, "select email from users where email = '$email'");
    $res = mysqli_num_rows($checkEmail);

    if ($res > 0) {

      require 'PHPMailer.php';
      require 'Exception.php';
      require 'SMTP.php';

      // Create a new PHPMailer instance
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPSecure = 'TLS';
      $mail->SMTPAuth = true;
      $mail->Username = 'dreamuniversity00@gmail.com';
      $mail->Password = 'gllcbuhoqxjdsead';
      $mail->SMTPDebug = SMTP::DEBUG_SERVER;

      // Sender and recipient
      $mail->setFrom('dreamuniversity29@gmail.com');
      $mail->addAddress($email);

      // Email content
      $mail->isHTML(true);

      $mail->Subject = 'Email Verification';
      $mail->Body = '<div style="display:flex;flex-direction:column;justify-content: center;align-items: center;
    background: #8b8b8b;
    margin:25px;
    width:585px;
    height:275px;
    border-radius: 11px;
    border: 1px solid black;">
    <div>
      <p style="font-size: 19px;"><b>Hello</b></p>
  </div>
      <div>
        <P style=" 
  font-size: 19px;">You are recievng this email because we recieved a password reset request for your account.</p>
     
      <p style=" ;
  font-size: 19px;">If you did not request a password reset, no further action is required.</p>
      <p style=" ;
  font-size: 19px;"><button style ="height: 45px;
  border: none;
  padding: 15px;
  background: #0557ee;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  border-radius: 10px;"><a style="text-decoration: none;
  color: white;" href="http://localhost/university-website/HTML/newPassword.php?secret=' . base64_encode($email) . '">Reset Password </a></button></p>
  </div>    
  </div>';
      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      if ($mail->send()) {
        $msg = "We have e-mailed your password reset link!";
      } else {
        $msg = "We couldn't send an email.";
      }
    } else {
      $msg = "We couldn't find a user with that email address";
    }
  }

  ?>
</head>

<body>
  <div class="container">
    <h2>Email Check</h2>
    <p>It's quick and Easy</p>
    <p style="color: red;"><?php if (!empty($msg)) echo $msg; ?></p>
    <div class="line"></div>
    <form action="" method="post">
      <input type="email" placeholder="Email" name="email" /><br />
      <input type="submit" name="forgot_password" value="Check" />
    </form>
  </div>
</body>

</html>