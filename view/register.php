<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add file -->
    <?php require  "../Lib/lib-login.php" ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="register" value="register">Register</button>

<?php 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //use lib-login file for hash password
    $passhash = $hashedPassword;
 
 
}
 

?>
</form>
</body>
</html>
