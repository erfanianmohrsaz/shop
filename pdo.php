<?php

$charset = 'utf8mb4';
$host = 'localhost';

$db = 'createtables' ;
$user = 'root';
$pass = '';

$dsn = "sqlite:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pas);