<?php

	session_start();
	include('../baglan.php');
	if(!session_is_registered("kadi")) {header('location:../index.php');}
	
	$tAd=$_POST['tAd'];
	$tEv=$_POST['tEv'];
	$tCep=$_POST['tCep'];
	$tAdres=$_POST['tAdres'];
	$tTarih=date('d-m-Y');
	
	$hata=Array();
	$hata[1]="Ad boş bırakılamaz...";
	$hata[2]="Numara alanlarından en az bir tanesini girin...";
	$hata[3]="Kişi ekleniyor...";
	$hata[4]="Bir hata meydana geldi...";
	$hata[5]="Kişi eklendi...";
	
	if(empty ($tAd)) {echo $hata[1];}
	else if(($tCep=="") && ($tEv=="")) {echo $hata[2]; }
	else {
		$kaydet=mysql_query("INSERT INTO kisi(ad,cep,ev,adres,tarih) values('$tAd','$tCep','$tEv','$tAdres','$tTarih')");
		
		if(!$kaydet) {echo $hata[4];}
		else {echo $hata[5];}
	}
?>