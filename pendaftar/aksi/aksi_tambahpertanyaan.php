<?php

session_start();

include '../../koneksi.php';

$pertanyaan = $_POST['pertanyaan'];

$tambah = mysqli_query($db, "INSERT INTO tb_masuk (pertanyaan) VALUES ('$pertanyaan')");

if($tambah == true)
{
echo "<script>alert('Pertanyaan Berhasil Ditambah');document.location='../tambahpertanyaan.php'</script>";
}
else
{
echo "<script>alert('Pertanyaan Gagal Ditambahkan');document.location='../tambahpertanyaan.php'</script>";
}

?>