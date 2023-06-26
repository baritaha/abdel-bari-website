<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="container">
    <form action="login.php" method="POST">
      <h2 style=color:red>Login</h2>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
<br>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>
</html>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the submitted username and password match the desired credentials
    $username = $_POST['username'];
    $password = $_POST['password'];

    $desiredUsername = 'Admin';
    $desiredPassword = '0000';

    if ($username === $desiredUsername && $password === $desiredPassword) {
      // Successful login, redirect to your website
      header('Location: index.html');
      exit;
    } else {
      // Invalid login, display an error message
      echo "<script>alert('Invalid username or password.');</script>";
    }
  }
?>
