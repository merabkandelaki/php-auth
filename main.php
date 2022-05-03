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
  <!-- ავტორიზაციის ფორმა -->

  <form action="vendor/signin.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="enter the login">
    <label>Password</label>
    <input type="password" name="password" placeholder="enter the password">
    <button type="submit">Sign in</button>
    <p>
      You do not have an account? - <a href="register.php">Register</a>!
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

<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  mb_internal_encoding('UTF-8');
?>
