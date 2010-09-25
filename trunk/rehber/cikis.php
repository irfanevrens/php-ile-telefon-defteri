<?php
	session_start();
	session_unregister("kadi");
	header('location:../index.php')
?>