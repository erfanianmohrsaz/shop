<?php require "../signup.php" ?>
<!DOCTYPE html>
<style>
label:empty {
 display: none;
}
</style>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>ثبت نام</title>
  <link rel="stylesheet" href="styleforlogin.css">

</head>

<body dir="rtl">

  <div class="container">
    <div class="login-box">
      <div>
        <h2>ثبت نام</h2>
      </div>
      <form method=post>
        <main>
                  <!-- Important parameters -->
          <div class="input-box">
            <input placeholder="" type="text" required name="user" >
            <label>نام کاربری</label>
          </div>
	  <label class="danger"><?=$error["user"]??null?></label>
          <div class="input-box">
            <input placeholder=""  type=password required name="pass">
            <label> رمز </label>
          </div>
<label class="danger"><?=$error["pass"]??null?></label>
          <div class="input-box">
            <input placeholder="" type=password required name="passrpt">
            <label>تکرار رمز </label>
          </div>
<label class="danger"><?=$error["passrpt"]??null?></label>
          <div class="input-box">
            <input dir="ltr" placeholder="" type=email required name="email">
            <label>ایمیل</label>
          </div>
<label class="danger"><?=$error["email"]??null?></label>
          <hr>
                   <!-- Unmportant parameters -->
          <div class="input-box">
            <input type="text" name="name" placeholder="">
            <label>نام </label>
          </div>
          <label class="danger"><?=$error["name"]??null?></label>
          <div class="input-box">
            <input placeholder="" type="text"  name="last">
            <label>نام خانوادگی</label>
          </div>
<label class="danger"><?=$error["last"]??null?></label>
          <div class="input-box">
            <input placeholder="" type="text" name="phone">
            <label>شماره همراه</label>
          </div>
<label class="danger"><?=$error["phone"]??null?></label>

          <button type="submit" class="btn">ثبت نام</button>

          <div class="signup-link">
            <a href="login.php">قبلا حساب داشته‌ام</a>
          </div>
      </form>
    </div>


</body>

</html>
