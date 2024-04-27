<?php


require "../../functions/pdo_connection.php";
require "../../functions/helpers.php";

if(isset($_GET)&& $_GET['cat_id'] !== '')
{
    global $pdo;
   
    $quary = 'DELETE FROM php_project.categories WHERE id = ?';
    $statement = $pdo -> prepare($quary);
    $statement ->execute([$_GET['cat_id']]);
}
header("Location:index.php");
?>