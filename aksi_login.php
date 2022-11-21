<?php

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($db, "SELECT * FROM tb_akun WHERE username = '$username'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);

if($data == 0)
{
echo "<script>alert('Username Tidak Ditemukan');document.location='portallogin.php'</script>";
}
else 
{
if($password <> $data['password'])
{
echo "<script>alert('Password Salah');document.location='portallogin.php'</script>";
}
else
{
$_SESSION['username'] = $data['username'];
$_SESSION['role_akun'] = $data['role_akun'];

echo "<script>alert('Login Berhasil');document.location='portallogin.php'</script>";
}
}

?>