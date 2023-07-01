<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
  <link rel="shortcut icon" href="../ICONS/graduating.png" type="image/x-icon" />
  <link rel="stylesheet" href="../CSS/forgot.css" />
</head>
<?php
if (isset($_POST['changePassword'])) {
  $email = $_POST['email'];
  $password1 = $_POST['password'];
  $password = password_hash($password1, PASSWORD_DEFAULT);
  $password2 = $_POST['confirmPassword'];

  if ($password1 == $password2) {
    $conn = mysqli_connect("localhost:3306", "root", "Hummingbird21", "dream");
    $reset_password = mysqli_query($conn, "UPDATE users SET password='$password'  WHERE email='$email' ");
    if ($reset_password > 0) {
      $msg3 = "Your password updated successfull.<a href='index.php'> Click Here->Home</a>";
    } else {
      $msg3 = "Error while updating your password.";
    }
  } else {
    $msg3 = "Password and confirm password do not match.";
  }
}
if ($_GET['secret']) {
  $email = base64_decode($_GET['secret']);
  $conn = mysqli_connect("localhost:3306", "root", "Hummingbird21", "dream");
  $checkDetails = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email . "'");
  $res = mysqli_num_rows($checkDetails);
  if ($res > 0) { ?>

    <body>
      <div class="container">
        <h2>Password</h2>
        <p>It's quick and Easy</p>
        <p style="color: red;"><?php if (!empty($msg3)) echo $msg3; ?></p>
        <div class="line"></div>
        <form action="" method="post">
          <input type="hidden" name="email" value="<?php echo $email; ?>" required /><br />
          <input type="password" placeholder="Password" name="password" required /><br />
          <input type="password" placeholder="Confirm Password" name="confirmPassword" required /><br />
          <input type="submit" name="changePassword" value="Save" />
        </form>
      </div>
  <?php }
} ?>
    </body>

</html>