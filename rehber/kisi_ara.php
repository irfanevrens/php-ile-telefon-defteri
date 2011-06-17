<?php

session_start();

include('../baglan.php');

if (!$_SESSION['kadi']) {
	
	header('location:../index.php');
}

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
			<hr />
			<div class="formAlani">
				<label for="kisiAra">Arama <span>5 adet sonuç bulundu toplam 0.003 saniye sürdü<div></div></span></label>
				<input type="text" id="arama" />
			</div>
			<hr />
			<table id="kisiListe" summary="Telefon Rehberi" cellspacing="1">
				<thead>
					<tr>
						<th scope="row" id="bos"></th>
						<th scope="row" abbr="ad-soyad">Ad Soyad</th>
						<th scope="row" abbr="cep">Cep Telefonu</th>
						<th scope="row" abbr="cep">Cep Telefonu</th>
						<th scope="row" abbr="cep">Cep Telefonu</th>
						<th scope="row" abbr="ev">Ev Telefonu</th>
						<th scope="row" abbr="adres">Adres</th>
					</tr>
				</thead>
				<tbody class="icerikEkle">
				<?php
					$yaz=mysql_query('SELECT * FROM kisi ORDER BY ad ASC');
					$adet=0;
					while($row=mysql_fetch_array($yaz)) {
							$adet++;
						echo"
					<tr>
						<th>".$adet."</th>
						<td>".$row['ad']."</td>
						<td>".$row['cep']."</td>
						<td>".$row['cep2']."</td>
						<td>".$row['cep3']."</td>
						<td>".$row['ev']."</td>
						<td width='180'>".$row['adres']."</td>
						<td class='kayitSil'><a href='".$row['ad']."' id='".$row['id']."'><img src='../resim/delete.png'></a></td>
					</tr>
						";
					}
				?>
				</tbody>
			</table>
		</div>
	</body>
</html>