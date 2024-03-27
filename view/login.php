<?php require "../login.php"; ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ورود</title>
  <link rel="stylesheet" href="styleforlogin.css">

</head>
<body dir="rtl">
<!-- partial:index.partial.html -->
<div class="container">
  <div class="login-box">
    <h2>ورود</h2>
    <form method=post>
      <div class="input-box">
        <input name=user type="text" required>
        <label>نام کاربری</label>
      </div>
      <div class="input-box">
        <input name=pass type="password" required>
        <label>رمز</label>
      </div>
    
      <button type="submit" class="btn">ورود</button>
      <div class="signup-link">
        <a href="sign-up.html">ساخت حساب</a>
      </div>
    </form>
  </div>
<!-- partial -->
  
</body>
</html>
