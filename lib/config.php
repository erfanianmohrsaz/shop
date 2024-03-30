<?php
function ishttps() {
	if (isset($_SERVER['HTTPS'])){
		if ( 'on' == strtolower($_SERVER['HTTPS']))
		{
			return true;
		}
		elseif ( '1' == $_SERVER['HTTPS'])
		{
			return true;
		}
	}
	if (isset($_SERVER['SERVER_PORT']) && ( '433'==$_SERVER['SERVER_PORT'])){
		return true;
	}
	return false;
}
function secretkey ($secretpath) {
	if(!file_exists($secretpath)){
		$secretkey= random_bytes( SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
		$secretkeyfile=fopen($secretpath,'w');
		fwrite ($secretkeyfile,$secretkey);
		return $secretkey;
	}
	$secretkey=file_get_contents($secretpath);
	return $secretkey;
}
 
	

$domain=$_SERVER["SERVER_NAME"];
$ishttps=ishttps();
$dbpath="./db.db";
$secretpath="./key.key";
$secretkey=secretkey($secretpath);
