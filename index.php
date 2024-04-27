<?php
require "../../functions/pdo_connection.php";
require "../../functions/helpers.php";

?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دسته‌بندی‌ها</title>
    <link rel="stylesheet" href="../../asset/css/categories.css">
</head>
<body>









<nav class="topnav">
        <a href="#" class="logo">  </a>
        <ul>
            <li><a href="">دسته‌بندی‌ها</a></li>
           
        </ul>
    </nav>








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






    <div class="header">
        <button id="create-category-btn" onclick="location.href='create.php'">create</button>
    </div>

    <table id="categories-table">
        <thead>
            <tr>
                <td>شناسه</td>
                <td>نام</td>
                <td>تنظیمات</td>
            </tr>

            <?php

            global  $pdo;
            $query ="SELECT * FROM php_project.categories";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $categories = $statement ->fetchAll();
         //   dd($categories);
            foreach($categories as $category)
            {
        //    }
            ?>



            <tr>
                <td><?= $category->id?></td>
                <td><?= $category->name?></td>
              
             <td><a href="<?=base_url('delete.php?cat_id=' . $category->id) ?>"><button class= "delete">delete</button></a>
              <a href="<?=base_url('edit.php?cat_id=' . $category->id) ?>"> <button class="edit" onclick="location.href='#'">edit</button></a></td>
            </tr>

            
<?php
            }      
?>
        </thead>
        <tbody>
            </tbody>
    </table>

   
    <script src="script.js"></script>
</body>
</html>




 
</body>
</html>
