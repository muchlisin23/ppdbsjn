<?php

include '../../koneksi.php';

$id_faq = $_GET['id_faq'];

$hapus = mysqli_query($db, "DELETE FROM tb_faq WHERE id_faq = '$id_faq'");

if($hapus == true)
{
echo "<script>alert('Data Berhasil Dihapus!');document.location='../panitia_kelolafaq.php'</script>";
}
else
{
echo "<script>alert('Data Gagal Dihapus!');document.location='../panitia_kelolafaq.php'</script>";
}
?>