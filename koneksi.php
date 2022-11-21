<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "db_sjnppdb";

$db = mysqli_connect($hostname, $username, $password, $dbname);

if (mysqli_connect_errno())
{
echo "Koneksi Database Gagal :" . mysqli_connect_errno();	echo "Koneksi Database Gagal :" . mysqli_connect_errno();
}

?>