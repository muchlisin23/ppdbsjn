<?php

session_start();

include '../../koneksi.php';

$username = $_SESSION['username'];

$cekpassword = mysqli_query($db, "SELECT password FROM tb_akun WHERE username='$username'");
$data = mysqli_fetch_assoc($cekpassword);

$old_pass = md5(mysqli_real_escape_string($db, trim($_POST['old_pass'])));
$new_pass = md5(mysqli_real_escape_string($db, trim($_POST['new_pass'])));
$retype_pass = md5(mysqli_real_escape_string($db, trim($_POST['retype_pass'])));

if($old_pass != $data['password']){
    echo "<script type='text/javascript'>alert('Password Lama Anda Salah');document.location='../admin_gantipassword.php'</script>";
}
else{
    if($new_pass != $retype_pass){
        echo "<script type='text/javascript'>alert('Password Baru yang Anda Masukkan Tidak Sama');document.location='../admin_gantipassword.php'</script>";
    }
    else{
        $query = mysqli_query($db, "UPDATE tb_akun SET password = '$new_pass' WHERE username = '$username'");
    if($query){
        echo "<script>alert('Password Berhasil Diubah');document.location='../admin_kelolaakun.php'</script>";
    }
    }
}

?>