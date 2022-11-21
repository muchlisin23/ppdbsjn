<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PPDB SMA Srijaya Negara</title>

  <!-- Favicon -->
  <link href="img/icon-sjn.png" rel="icon">
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['username'])) {
    $role = $_SESSION['role_akun'];
    if ($role == 0) {
      header('location: admin/admin_kelolaakun.php');
    }
    if ($role == 1) {
      header('location: panitia/panitia_pendaftardalamkota.php');
    }
    if ($role == 2) {
      header('location: pimpinan/pimpinan_dataakun.php');
    }
  }
  ?>

  <div class="container-fluid position-relative d-flex p-0">
    <!-- Sign In Start -->
    <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
          <div class="d-flex align-items-center justify-content-center">
            <a href="#" class="">
              <h3 class="text-primary d-flex align-items-center justify-content-center">Halaman Login</h3>
              <h4 class="text-primary d-flex align-items-center justify-content-center">PPDB SMA Srijaya Negara</h4>
              <div class="d-flex align-items-center justify-content-center">
                <img src="img/icon-sjn200.png" alt="" style="width: 150px; height: 150px;">
              </div>
            </a>
          </div>

          <form action="aksi_login.php" method="post">
            <div class="bg-secondary rounded p-4 p-sm-5 mx-3" style="margin-top: 0.5rem;margin-bottom:1.5rem;">
              <div class="form-floating mb-3">
                <input class="form-control" name="username" placeholder=" " required>
                <label>Username</label>
              </div>
              <div class="form-floating mb-4">
                <input type="password" class="form-control" name="password" placeholder=" " required>
                <label>Password</label>
              </div>
              <div class="d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-primary py-2 w-50 mb-0">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Sign In End -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>