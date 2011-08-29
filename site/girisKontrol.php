<?php

session_start();

$kMail=$_POST["kMail"];
$kSifre=$_POST["kSifre"];
$mail="admin@buraya.com";
$sifre="admin123";

if (empty($kMail) || empty($kSifre)) {
	
	echo "Boş alanları doldurunuz...";
} elseif (($kMail != $mail) || ($kSifre != $sifre)) {
	
	echo "Bilgilerinizi kontrol ediniz...";
} else {
	
	$_SESSION['kadi'] = TRUE;
	echo "tamam";
}