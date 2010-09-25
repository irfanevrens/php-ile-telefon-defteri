<?php

	session_start();
	include('../baglan.php');
	if(!session_is_registered("kadi")) {header('location:../index.php');}
	
	$arama=$_POST['arama'];

	$yaz=mysql_query("SELECT * FROM kisi WHERE ad LIKE '$arama%' or cep LIKE '$arama%' ORDER BY ad ASC");
			$adet=0;
					while($row=mysql_fetch_array($yaz)) {
							$adet++;
						echo"
					<tr>
						<th>".$adet."</th>
						<td>".$row['ad']."</td>
						<td>".$row['cep']."</td>
						<td>".$row['ev']."</td>
						<td>".$row['adres']."</td>
					</tr>
						";
					}
?>