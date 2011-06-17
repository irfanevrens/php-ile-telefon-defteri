<?php
$host="localhost";
$kadi="telefon";
$sifre="telefon123";
$vtabani="telefon";


$baglan=@mysql_connect($host,$kadi,$sifre);
mysql_select_db($vtabani,$baglan);
mysql_query("SET NAMES utf8");