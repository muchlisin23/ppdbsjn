<?php

include '../../koneksi.php';

$id_pendaftaran = $_GET['id_pendaftaran'];

$hapus = mysqli_query($db, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran = '$id_pendaftaran'");
if($hapus == true)
{
echo "<script>alert('Data Berhasil Dihapus!');document.location='../panitia_pendaftarluarkota.php'</script>";
}
else
{
echo "<script>alert('Data Gagal Dihapus!');document.location='../panitia_pendaftarluarkota.php'</script>";
}

?>