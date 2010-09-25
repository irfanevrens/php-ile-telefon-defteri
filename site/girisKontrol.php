<?php

	session_start();

	$kMail=$_POST["kMail"];
	$kSifre=$_POST["kSifre"];
	$mail="deneme@buraya";
	$sifre="deneme123";
	
	if( empty($kMail) || empty($kSifre) ) {echo "Boş alanları doldurunuz...";}
	else if(($kMail!=$mail) || ($kSifre!=$sifre)) {echo "Bilgilerinizi kontrol ediniz...";}
	else {
		session_register("kadi");
		echo "tamam";
	}

?>