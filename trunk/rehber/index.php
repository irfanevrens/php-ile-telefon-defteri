<?php
	session_start();
	if(!session_is_registered("kadi")) {header('location:../index.php');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html>
	<head>
		<title>Telefon Defteri Uygulaması</title>

		<meta name="keywords" content="telefon,defteri,uygulaması" />
		<meta name="description" content="Telefon numarlarının saklanacağı bir yazılım" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../css/genel.css" charset="UTF-8" media="all" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
		<script type="text/javascript" src="../js/genel.js"></script>
	</head>
	<body>
		<div class="rehberDiv">
			<h2 class="baslik">Telefon Rehber UygulamasI</h2>
			<a href="kisi_ekle.php">Kişi Ekle</a>
			<a href="kisi_listesi.php">Kişi Listesi</a>
			<a href="kisi_ara.php">Kişi Ara</a>
			<a href="cikis.php">Çıkış</a>
		</div>
	</body>
</html>