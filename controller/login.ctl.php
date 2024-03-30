<?php
require_once "../model/pdo.php";
require_once "../lib/encrypt.php";
require_once "../model/user.php";
require_once "../controller/login.php";

if (($userid=loggedin())!==false) {
	header('location: /view/index.php');
}


function login_array()
{
	return [ "user" => $_POST["user"],"pass"=> $_POST["pass"] ];
}
function auth_user(PDO $dbh,array $logins){
	$row=userrow($dbh,$logins["user"]);
	if(!$row){
		return ["user"=>"User not found"];
	}
	if (!password_verify($logins["pass"],$row["passhash"]))
	{
		return ["pass"=>"Wrong password"];
	}
	login($row["userid"]);
		return true;
	
}
function validate_logins(PDO $dbh,$logins)
{
	if ($error=array_filter($logins,function ($val){return !$val;}))
	{
	return	array_map(function (){return "Fill the input";},$error);
	}

	if (!ctype_alnum($logins["user"]))
	{ $error["user"] = "Input alphanumeric charterers"; }
	if (!ctype_print( $logins["pass"]) )
	{ $error["pass"] = "Input printable charterers"; }
	if ($error)
	{ return $error; }
	return auth_user($dbh,$logins);
}
if ($_SERVER['REQUEST_METHOD']==='POST')
{
	$logins = login_array();
	$error=validate_logins($dbh,$logins);
}
