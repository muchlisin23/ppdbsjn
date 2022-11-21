<?php

include '../../koneksi.php';

$id_masuk = $_GET['id_masuk'];

$hapus = mysqli_query($db, "DELETE FROM tb_masuk WHERE id_masuk = '$id_masuk'");

if($hapus == true)
{
echo "<script>alert('Data Berhasil Dihapus!');document.location='../panitia_pertanyaanmasuk.php'</script>";
}
else
{
echo "<script>alert('Data Gagal Dihapus!');document.location='../panitia_pertanyaanmasuk.php'</script>";
}
?>