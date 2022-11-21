<?php

session_start();

include '../../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$nama = $_POST['nama_pengguna'];
$role = $_POST['role_akun'];

$tambah = mysqli_query($db, "INSERT INTO tb_akun (username, password, nama_pengguna, role_akun) VALUES('$username', '$password', '$nama', '$role')");

if($tambah == true)
{
    echo "<script>alert('Data Berhasil Ditambah');document.location='../admin_kelolaakun.php'</script>";
}
else
{
    echo "<script>alert('Penambahan Akun Gagal');document.location='../admin_kelolaakun.php'</script>";
}

?>