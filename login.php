<?php
require_once "pdo.php";
require_once "encrypt.php";
require_once "config.php";

if (($userid=loggedin())!==false) {
	header('location: /index.php');
}


function login_array()
{
	return [ "user" => $_POST["user"],"pass"=> $_POST["pass"] ];
}
function userrow(PDO $dbh,string $nameemail){
	$sth=pdo_prepare($dbh,"SELECT userid,username , passhash FROM users WHERE username = :nameemail OR email = :nameemail");
	pdo_exec($sth,["nameemail"=> $nameemail]);
	$row=pdo_fetch($sth);
	return $row; 
}
function loggedin()
{
	global $secretkey;
	if (!isset($_COOKIE)) { return false; }
	if (!isset($_COOKIE["usertoken"])) { return false; }
	$userid=decrypt($_COOKIE["usertoken"],$secretkey);
	if (!$userid){return false;}
	if (!ctype_digit($userid)){return false;}
	return $userid;
}

function login(string $userid)
{
	global $secretkey;
	global $domain;
	global $ishttps;
	 setcookie("usertoken",encrypt($userid,$secretkey),time()+10000,'/',$domain,$ishttps,1);
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
	 var_dump( $_COOKIE);
