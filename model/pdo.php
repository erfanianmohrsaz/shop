<?php
require_once "../lib/ppdo.php";
require_once "../lib/config.php";
$dsn = "sqlite:$dbpath";
$dbh= pdo($dsn);
