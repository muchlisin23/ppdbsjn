<?php

session_start();

include '../../koneksi.php';

$pertanyaan = $_POST['pertanyaan'];

$tambah = mysqli_query($db, "INSERT INTO tb_masuk (pertanyaan) VALUES ('$pertanyaan')");

if($tambah == true)
{
echo "<script>alert('Data Berhasil Ditambah');document.location='../panitia_pertanyaanmasuk.php'</script>";
}
else
{
echo "<script>alert('Penambahan Data Gagal');document.location='../panitia_pertanyaanmasuk.php'</script>";
}

?>