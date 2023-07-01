<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Change Name</title>
  <link rel="shortcut icon" href="../ICONS/graduating.png" type="image/x-icon" />
  <link rel="stylesheet" href="../CSS/forgot.css" />
  <?php


  if (isset($_POST['change'])) {
    $exname = $_POST['existingname'];
    $nwname = $_POST['newname'];

    $connection = mysqli_connect("localhost:3306", "root", "Hummingbird21", "dream");
    $checkName = mysqli_query($connection, "select email from users where name = '$exname'");
    $res = mysqli_num_rows($checkName);
    if ($res > 0) {
      $chang = mysqli_query($connection, "update users set name = '$nwname' where name = '$exname'");
      if ($chang) {
        $msg = "Successfully Updated ";
      } else {
        $msg = "Couldn't Update try later!!";
      }
    } else {
      $msg = "There is no user with such name";
    }
    mysqli_close($connection);
  }
  ?>
</head>

<body>
  <div class="container">
    <h2>Change Name</h2>
    <p>It's quick and Easy</p>
    <p style="color: red"><?php if (!empty($msg)) echo $msg; ?></p>
    <div class="line"></div>
    <form action="" method="post">
      <input type="text" placeholder="Enter existing user name" name="existingname" /><br />
      <input type="text" placeholder="Enter new user name" name="newname" /><br />
      <input type="submit" name="change" value="Change" />
    </form>
  </div>
</body>

</html>