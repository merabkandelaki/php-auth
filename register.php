<?php
  session_start();
  if ($_SESSION['user']) {
    header('Location: profile.php');
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Authorization and registration</title>
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
  <!-- რეგისტრაციის ფორმა -->

  <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>Name, Surname</label>
    <input type="text" name="full_name" placeholder="enter the full name">
    <label>Login</label>
    <input type="text" name="login" placeholder="enter the login">
    <label>Email</label>
    <input type="email" name="email" placeholder="enter the email address">
    <label>Profile image</label>
    <input type="file" name="avatar">
    <label>Password</label>
    <input type="password" name="password" placeholder="enter the password">
    <label>Password confirmation</label>
    <input type="password" name="password_confirm" placeholder="confirm the password">
    <button type="submit">Sign in</button>
    <p>
      Do you already have an account? - <a href="main.php">Make in authorization</a>!
    </p>

      <?php
        if ($_SESSION['message']) {
          echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']); // unset ემსახურება მესიჯის გაქრობას
      ?>

  </form>
</body>
</html>
