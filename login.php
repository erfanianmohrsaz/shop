<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        html,
        body {
            height: 100%;
        }
        body {
            background: #007bec;
            color: #fff;
            font-size: 1.5em;
            font-weight: 400;
            text-align: right;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
        .main {
            position: relative;
            background: #ffffff;
            color: #0e5698;
            display: inline-block;
            padding: 15px 30px;
            margin: 0 auto;
            border-radius: 7px;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.2);
            min-height: 250px;
            min-width: 400px;
        }
        h1 {
            font: 30px sans-serif;
            text-align: center;
            margin: 25px 10px;
            font-weight: bold;
            color: #4a96db;
        }
        input,
        button,
        select,
        textarea {
            display: block;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-top: 10px;
            line-height: 28px;
            height: 30px;
            padding: 0 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: sans-serif;
            font-size: 15px;
        }
        button {
            background: #007bec;
            color: #fff;
            line-height: 40px;
            height: 40px;
            font-size: 18px;
            border: 0;
        }
        button:hover {
            opacity: 0.7;
            cursor: pointer;
        }
    </style>


</head>
<body>


<?php
// شروع جلسه
  session_start();

// چک کردن اینکه فرم به درستی ارسال شده باشد
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // اطلاعات ورود کاربر
    $username = $_POST['username'];
    $password = $_POST['password'];

    // اطلاعات ورود صحیح
    $correct_username = 'admin';
    $correct_password = '123';

    // check the information
    if ($username == $correct_username && $password == $correct_password) 
    {
        // if Information == true user can going to new page
        echo "hello";
        header('Location: Category_Management.php');
        exit;
    }
    else {
        // if Information == false show error message
        echo 'your username or password is false';
    }
}  
else {
    //If the form is not submitted correctly, we will provide the login form

    ?>



    <!-- فرم ورود -->
    <form method="post">
        <input type="text" id="username" name="username" placeholder="username">
        <br>
        <input type="password" id="password" name="password" placeholder="password">
        <br>
        <button type="submit"name="register">register</button>
    </form>
    <?php
    }


    ?>





</body>
</html>

