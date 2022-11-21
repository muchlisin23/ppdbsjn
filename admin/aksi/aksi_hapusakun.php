<?php

include '../../koneksi.php';

$id_akun = $_GET['id_akun'];

$hapus = mysqli_query($db, "DELETE FROM tb_akun WHERE id_akun = '$id_akun'");

if($hapus == true)
{
echo "<script>alert('Akun Berhasil Dihapus!');document.location='../admin_kelolaakun.php'</script>";
}
else
{
echo "<script>alert('Akun Gagal Dihapus!');document.location='../admin_kelolaakun.php'</script>";
}
?>