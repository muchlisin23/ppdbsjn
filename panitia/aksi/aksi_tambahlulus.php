<?php

session_start();

include '../../koneksi.php';

$datapendaftar = $_POST['datapendaftar'];

$tambah = mysqli_query($db, "INSERT INTO tb_lulus (id_pendaftaran) VALUES ('$datapendaftar')");

if($tambah == true)
{
echo "<script>alert('Data Berhasil Ditambah');document.location='../panitia_kelolapendaftarlulus.php'</script>";
}
else
{
echo "<script>alert('Penambahan Data Gagal');document.location='../panitia_kelolapendaftarlulus.php'</script>";
}

?>