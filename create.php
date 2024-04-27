<?php
require "../../functions/pdo_connection.php";
require "../../functions/helpers.php";

if(isset($_POST['name']) && $_POST['name'] !== '')
{
   global $pdo;
   
   $quary = 'INSERT INTO php_project.categories SET name = ? , created_at = NOW();';
   $statement = $pdo -> prepare($quary);
   $statement ->execute([$_POST['name']]);
 
   header("Location:index.php");
}
?>


<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>create category</title>
    <link rel="stylesheet" href="../../asset/css/categories.css">
    <link rel="stylesheet" href="../../asset/css/create.css">
</head>
<body>

    
    <nav class="topnav">
            <a href="#" class="logo">  </a>
            <ul>
                <li><a href="">دسته‌بندی‌ها</a></li>
               
            </ul>
        </nav>

<div class="container">
        <h1>create category</h1>

        <form  method ="post">
            <label for="name">name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit" class="button" onclick="location.href='delete.php'" >create</button>
            <!-- onclick="location.href='#' -->
        </form>
    </div>






    <section class="sidebar">

<section class="sidebar-link">

    <a href="../index.php">panel</a>

</section>

<section class="sidebar-link">

    <a href="">category</a>

</section>

<section class="sidebar-link">

    <a href="../post/index.php">post</a>

</section>

</section>

<section class="main-content">

</section> 





    <script src="script.js"></script>
</body>
</html>
