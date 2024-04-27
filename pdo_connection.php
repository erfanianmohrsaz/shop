<?php

global $pdo;

try{
// for show your error
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);// obj => object


 // you should say your hostname && database_name && username && password && show error
    $pdo = new PDO("mysql:host=localhost;dbname=php_project",'root','',$options);

  // for if you want to access this code in enother pages you should return it 
 return $pdo;
}

catch(PDOException $e)
{
    // check if you have a Error show a eeror by message to you
    echo 'Error' . $e->getMessage();
}
?>