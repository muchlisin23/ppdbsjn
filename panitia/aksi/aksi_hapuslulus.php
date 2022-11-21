<?php

include '../../koneksi.php';

$id_lulus = $_GET['id_lulus'];

$hapus = mysqli_query($db, "DELETE FROM tb_lulus WHERE id_lulus = '$id_lulus'");

if($hapus == true)
{
echo "<script>alert('Data Berhasil Dihapus!');document.location='../panitia_kelolapendaftarlulus.php'</script>";
}
else
{
echo "<script>alert('Data Gagal Dihapus!');document.location='../panitia_kelolapendaftarlulus.php'</script>";
}
?>