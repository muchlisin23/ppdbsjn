<?php

session_start();

if (!isset($_SESSION['username'])) {
  header('location: ../portallogin.php');
} else {
  $username = $_SESSION['username'];
  $role = $_SESSION['role_akun'];

  if ($role == 1) {
    header('location: ../panitia/panitia_pendaftardalamkota.php');
  }
  if ($role == 2) {
    header('location: ../pimpinan/pimpinan_dataakun.php');
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PPDB SMA Srijaya Negara</title>

  <!-- Favicon -->
  <link href="../img/icon-sjn.png" rel="icon">
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
      <a href="admin_kelolaakun.php">
        <h3 class="text-primary mb-3" style="margin-left:3rem; margin-top:0.5rem;">Dashboard</h3>
      </a>
      <div class="d-flex align-items-center ms-4" style="margin-bottom:1rem;">
        <div class="position-relative">
          <img class="rounded-circle" src="../img/icon-user.jpg" alt="" style="width: 50px; height: 50px;">
        </div>
        <div class="ms-3">
          <h6 class="mb-0">
            <?php
            include '../koneksi.php';

            $query = mysqli_query($db, "SELECT * FROM tb_akun WHERE username = '$_SESSION[username]'");
            $data = mysqli_fetch_array($query);
            echo $data['nama_pengguna'];
            ?>
          </h6>
          <span>
            <?php
            if ($_SESSION['role_akun'] == 0) {
              echo "Admin";
            }
            if ($_SESSION['role_akun'] == 1) {
              echo "Panitia";
            }
            if ($_SESSION['role_akun'] == 2) {
              echo "Pimpinan";
            }
            ?>
          </span>
        </div>
      </div>
      <div class=" container-fluid position-relative d-flex p-0">
        <div class="navbar-nav w-100">
          <a href="admin_kelolaakun.php" class="nav-item nav-link"><b>Kelola Akun</b></a>
          <a href="admin_gantipassword.php" class="nav-item nav-link active"><b>Ganti Password</b></a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Sidebar End -->

  <!-- Content Start -->
  <div class="content">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
      <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
            <img class="rounded-circle me-lg-2" src="../img/icon-user.jpg" alt="" style="width: 40px; height: 40px;">
            <span class="d-none d-lg-inline-flex"><b>
                <?php echo $data['nama_pengguna']; ?>
              </b></span>
          </a>
          <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
            <a href="admin_gantipassword.php" class="dropdown-item">Ganti Password</a>
            <a href="../aksi_logout.php" class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
          <div class="bg-secondary rounded h-100 p-4">
            <h4 class="mb-4">Ganti Password</h4>
            <form action="aksi/aksi_gantipassword.php" method="post">
              <div class="mb-3">
                <label class="form-label">Password Lama</label>
                <input type="password" class="form-control" autocomplete="off" name="old_pass" required>
                <div class="form-text">Masukkan password lama anda.
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Password Baru</label>
                <input type="password" class="form-control" autocomplete="off" name="new_pass" required>
                <div class="form-text">Masukkan password baru anda.
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Konfirmasi Password Baru</label>
                <input type="password" class="form-control" autocomplete="off" name="retype_pass" required>
                <div class="form-text">Masukkan kembali password baru anda.
                </div>
              </div>
              <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Form End -->
    <!-- Content End -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>