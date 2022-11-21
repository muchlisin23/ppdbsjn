<?php

session_start();

include 'koneksi.php';

$_SESSION['username'];

session_unset();
session_destroy();

header("location: portallogin.php");
?>