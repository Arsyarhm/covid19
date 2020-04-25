<?php
session_start();
if(isset($_SESSION['id_petugas']))
{
    header("Location:http://localhost/sehatyuk/login/index.php");
}
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style2.css">
  <title>Login Form</title>
</head>
<body>
 <center> <div class="login-wrapper">
    <form action="proses-login.php" class="form" method="post">
      <img src="sehatyuk/login/avatar.png" width="120px" alt="">
      <h2>LOGIN OFFICER</h2>
      <div class="input-group">
        <input type="text" name="username" id="username" required>
        <label for="username">Username</label>
      </div>
      <div class="input-group">
        <input type="password" name="password" id="password" required>
        <label for="password">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn" name="simpan">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="btnlogin" name="simpan">
      </form>
    </div>
    </div>
    </form>
  </div>
  </center>
</body>
</html>