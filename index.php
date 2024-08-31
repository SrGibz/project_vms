<?php
  include("../dashboard/login/connection.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome | Login</title>
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <div class="wrapper">
    <form action="../dashboard/login/login.php" method="POST">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" id="user" name="user" placeholder="User ID" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" id="pass" name="pass" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" class="btn" id="submit" name="submit">Login</button>
    </form>
  </div>
</body>
</html>