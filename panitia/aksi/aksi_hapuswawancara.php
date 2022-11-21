<?php

include '../../koneksi.php';

$id_wawancara = $_GET['id_wawancara'];

$hapus = mysqli_query($db, "DELETE FROM tb_wawancara WHERE id_wawancara = '$id_wawancara'");

if($hapus == true)
{
echo "<script>alert('Data Berhasil Dihapus!');document.location='../panitia_kelolajadwalwawancara.php'</script>";
}
else
{
echo "<script>alert('Data Gagal Dihapus!');document.location='../panitia_kelolajadwalwawancara.php'</script>";
}
?>