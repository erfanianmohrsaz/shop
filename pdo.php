<?php
require_once "ppdo.php";
require_once "config.php";
$dsn = "sqlite:$dbpath";
$dbh= pdo($dsn);
