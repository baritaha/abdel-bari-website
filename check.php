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
