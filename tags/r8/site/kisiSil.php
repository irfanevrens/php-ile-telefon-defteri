<?php

session_start();

include('../baglan.php');

if (!$_SESSION['kadi']) {

	header('location:../index.php');
}

$id=$_POST['id'];

$hata=Array();

$hata[1]="no";
$hata[2]="yes";


$sil=mysql_query("DELETE FROM kisi WHERE id='$id'");

if(!$sil) {echo $hata[1];}
else {echo $hata[2];}