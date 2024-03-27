<?php
require "pdo.php";
function login_array()
{
	return [ "user" => $_POST["user"],"pass"=> $_POST["pass"] ];
}
function userrow(PDO $dbh,string $nameemail){
	$sth=pdo_prepare($dbh,"SELECT username , passhash FROM users WHERE username = :nameemail OR email = :nameemail");
	pdo_exec($sth,["nameemail"=> $nameemail]);
	$row=pdo_fetch($sth);
	return $row; 
}
function auth_user(PDO $dbh,string $nameemail,string $password){
	$row=userrow($dbh,$nameemail);
	if(!$row){
		return ["user"=>"User not found"];
	}
	return password_verify($password,$row["passhash"])?true:["pass"=>"Wrong password"];
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
	{ $error["user"] = "Input printable charterers"; }
	if ($error)
	{ return $error; }
	return auth_user($dbh,$logins["user"],$logins["pass"]);
}
if ($_SERVER['REQUEST_METHOD']==='POST')
{
	$logins = login_array();
	echo count($logins);
	print_r (validate_logins($dbh,$logins));
	
}



?>
