<?php
function encrypt(string $val,string $secretkey){
	$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
	return bin2hex ($nonce.sodium_crypto_secretbox($val,$nonce,$secretkey));
}
function decrypt(string $cipherbin,string $secretkey)
{
	$cipherbin = hex2bin($cipherbin);
	$nonce = mb_substr($cipherbin,0,SODIUM_CRYPTO_SECRETBOX_NONCEBYTES,'8bit');
	$cipher = mb_substr($cipherbin,SODIUM_CRYPTO_SECRETBOX_NONCEBYTES,null,'8bit');
	return sodium_crypto_secretbox_open($cipher,$nonce,$secretkey);
}
