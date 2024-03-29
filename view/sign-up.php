<!DOCTYPE html>
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
      <form action="#">
        <main>
                  <!-- Important parameters -->
          <div class="input-box">
            <input type="text" required>
            <label>نام کاربری</label>
          </div><label class="danger">رمز عبور مطابق نیست</label>
          <div class="input-box">
            <input type="text" required>
            <label>شماره همراه</label>
          </div><label class="danger">رمز عبور مطابق نیست</label>
          <div class="input-box">
            <input type="email" name="email" required>
            <label>ایمیل</label>
          </div><label class="danger">رمز عبور مطابق نیست</label>
          <div class="input-box">
            <input type="password" required>
            <label> رمز </label>
          </div><label class="danger">رمز عبور مطابق نیست</label>
          <div class="input-box">
            <input type="password" required>
            <label>تکرار رمز </label>
          </div>
          <label class="danger">رمز عبور مطابق نیست</label>
          <hr>
                   <!-- Unmportant parameters -->
          <div class="input-box">
            <input type="text" required>
            <label>نام </label>
          </div><label class="danger">رمز عبور مطابق نیست</label>
          <div class="input-box">
            <input type="text" required>
            <label>نام خانوادگی</label>
          </div><label class="danger">رمز عبور مطابق نیست</label>

          <button type="submit" class="btn">ثبت نام</button>

          <div class="signup-link">
            <a href="login.php">قبلا حساب داشته‌ام</a>
          </div>
      </form>
    </div>


</body>

</html>