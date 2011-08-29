<?php

session_start();

unset($_SESSION['kadi']);

header('location:../index.php');