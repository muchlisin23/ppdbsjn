<?php

session_start();

include '../../koneksi.php';

$datapendaftar = $_POST['datapendaftar'];
$tgl_wawancara = $_POST['tgl_wawancara'];

$tambah = mysqli_query($db, "INSERT INTO tb_wawancara (id_pendaftaran, tgl_wawancara) VALUES ('$datapendaftar', '$tgl_wawancara')");

if($tambah == true)
{
echo "<script>alert('Data Berhasil Ditambah');document.location='../panitia_kelolajadwalwawancara.php'</script>";
}
else
{
echo "<script>alert('Penambahan Data Gagal');document.location='../panitia_kelolajadwalwawancara.php'</script>";
}

?>