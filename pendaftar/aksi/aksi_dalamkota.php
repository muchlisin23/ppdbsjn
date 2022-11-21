<?php

session_start();

include '../../koneksi.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nohp_ayah = $_POST['nohp_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$nohp_ibu = $_POST['nohp_ibu'];

$tambah = mysqli_query($db, "INSERT INTO tb_pendaftaran VALUES ('', '0', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tgl_lahir', '$alamat', '$asal_sekolah', 'Palembang', 'Sumatera Selatan', '$nohp', '$email', '$nama_ayah', '$pekerjaan_ayah', '$nohp_ayah', '$nama_ibu', '$pekerjaan_ibu', '$nohp_ibu')");

if($tambah == true)
{
echo "<script>alert('Formulir Anda Sukses Terkirim');document.location='../pendaftarandalamkota.php'</script>";
}
else
{
echo "<script>alert('Formulir Anda Gagal Terkirim');document.location='../pendaftarandalamkota.php'</script>";
}

?>