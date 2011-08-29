<?php

session_start();

include('../baglan.php');

if (!$_SESSION['kadi']) {

	header('location:../index.php');
}

$arama=$_POST['arama'];

$yaz = mysql_query(
'
SELECT * FROM kisi 
WHERE 
	ad LIKE "%' . $arama . '%" or 
	cep LIKE "%' . $arama . '%" or 
	cep2 LIKE "%' . $arama . '%" or 
	cep3 LIKE "%' . $arama . '%" 
ORDER BY ad ASC
');

$adet=0;

while($row = mysql_fetch_array($yaz)) {
	
	$adet++;

	echo 
'
<tr>
	<th>' . $adet . '</th>
	<td>' . $row['ad'] . '</td>
	<td>' . $row['cep'] . '</td>
	<td>' . $row['cep2'] . '</td>
	<td>' . $row['cep3'] . '</td>
	<td>' . $row['ev'] . '</td>
	<td width="180">' . $row['adres'] . '</td>
	<td class="kayitSil2"><a href="' . $row['ad'] . '" id="' . $row['id'] . '"><img src="../resim/delete.png"></a></td>
</tr>
';
}