<?php

session_start();

include '../../koneksi.php';

$masuk = $_POST['masuk'];
$jawaban = $_POST['jawaban'];

$tambah = mysqli_query($db, "INSERT INTO tb_faq (id_faq, id_masuk, jawaban) VALUES ('','$masuk','$jawaban')");

if($tambah == true)
{
echo "<script>alert('Data Berhasil Ditambah');document.location='../panitia_kelolafaq.php'</script>";
}
else
{
echo "<script>alert('Penambahan Data Gagal');document.location='../panitia_kelolafaq.php'</script>";
}

?>