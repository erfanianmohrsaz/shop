<?php
require "../../functions/pdo_connection.php";
require "../../functions/helpers.php";






global $pdo;




if(!isset($_GET['cat_id']))
{
    redirect('panel/categories');

}


   

$quary = 'SELECT * FROM php_project.categories WHERE id = ?';
$statement = $pdo -> prepare($quary);
$statement ->execute([$_GET['cat_id']]);
$category = $statement ->fetch();



if($category === false)
{
    redirect('panel/categories');
}




if(isset($_POST['name']) && $_POST['name'] !== '')
{
   $quary = ' UPDATE php_project.categories SET name = ? , update_at = NOW() WHERE id =?;';
   $statement = $pdo -> prepare($quary);
   $statement ->execute([$_POST['name'],$_GET['cat_id']]);
 
   redirect('panel/categories/edit.php');
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
        <h1>update category</h1> 

        <form  method ="post" action="<?=base_url('edit.php?cat_id='). $_GET['cat_id']?>">
            <label for="name">name:</label>
            <input type="text" id="name" name="name" value="<?=$category->name?>">
            <button type="submit" class="button" onclick="location.href='' "    style="background-color: lightsalmon;" >update</button>
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
