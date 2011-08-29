<?php

define('VT_HOST', 'localhost');
define('VT_KULLANICI_ADI', 'telefon');
define('VT_SIFRE', 'telefon123');
define('VT_VERITABANI', 'telefon');

mysql_connect(VT_HOST, VT_KULLANICI_ADI, VT_SIFRE);
mysql_select_db(VT_VERITABANI);
mysql_query("SET NAMES utf8");