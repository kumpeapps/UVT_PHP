<?php
	
//Sets Encryption Method
$method = 'aes-256-cbc';

//Set IV to d06e72d2844ca7f2 (KumpeApps IV)
$iv = chr(0x64) . chr(0x0) . chr(0x6) . chr(0x65) . chr(0x7) . chr(0x2) . chr(0x64) . chr(0x2) . chr(0x8) . chr(0x4) . chr(0x4) . chr(0x63) . chr(0x61) . chr(0x7) . chr(0x66) . chr(0x2);

//Run function to encrypt text and output as $encrypted var
function encrypt($key, $plaintext){
$encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
}

//Run function to decrypt text and output as $encrypted var
function decrypt($key, $decrypted){
$decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);
}

?>