<?php
require "ppdo.php";
$dbpath = './db.db' ;
$dsn = "sqlite:$dbpath";
$dbh= pdo($dsn);

