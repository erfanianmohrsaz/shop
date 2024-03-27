<?php
//creat random string
$length = 10;
$salt = bin2hex(random_bytes($length));

//creat hash password and add salt
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);