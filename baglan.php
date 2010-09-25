<?php
$host="localhost";
$kadi="root";
$sifre="vertrigo";
$vtabani="telefon";


	$baglan=@mysql_connect($host,$kadi,$sifre);
			mysql_select_db($vtabani,$baglan);
			mysql_query("SET NAMES utf8");

?>