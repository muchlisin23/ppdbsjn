<?php

session_start();

if (!isset($_SESSION['username'])) {
  header('location: ../portallogin.php');
} else {
  $username = $_SESSION['username'];
  $role = $_SESSION['role_akun'];

  if ($role == 0) {
    header('location: ../admin/admin_kelolaakun.php');
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
      <a href="panitia_pendaftardalamkota.php">
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
          <a href="panitia_pendaftardalamkota.php" class="nav-item nav-link"><b>Pendaftar Dalam Kota</b></a>
          <a href="panitia_pendaftarluarkota.php" class="nav-item nav-link active"><b>Pendaftar Luar Kota</b></a>
          <a href="panitia_kelolajadwalwawancara.php" class="nav-item nav-link"><b>Jadwal Wawancara</b></a>
          <a href="panitia_kelolapendaftarlulus.php" class="nav-item nav-link"><b>Pendaftar Lulus</b></a>
          <a href="panitia_kelolafaq.php" class="nav-item nav-link"><b>Kelola FAQ</b></a>
          <a href="panitia_pertanyaanmasuk.php" class="nav-item nav-link"><b>Pertanyaan Masuk</b></a>
          <a href="panitia_gantipassword.php" class="nav-item nav-link"><b>Ganti Password</b></a>
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
            <a href="panitia_gantipassword.php" class="dropdown-item">Ganti Password</a>
            <a href="../aksi_logout.php" class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Ingin Logout?')">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
      <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
          <h4 class="mb-0">Pendaftar Luar Kota</h4>
        </div>
        <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
              <tr class="text-white">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Asal Sekolah</th>
                <th scope="col">Asal Kota</th>
                <th scope="col">Asal Provinsi</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">Alamat Email</th>
                <th scope="col">Nama Ayah</th>
                <th scope="col">Pekerjaan Ayah</th>
                <th scope="col">Nomor HP Ayah</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Pekerjaan Ibu</th>
                <th scope="col">Nomor HP Ibu</th>
                <th scope="col">Hapus</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../koneksi.php';

              $query = mysqli_query($db, "SELECT * FROM tb_pendaftaran WHERE status='1'");
              $nomor = 0;
              while ($data = mysqli_fetch_array($query)) {

                $nomor++;
              ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?php echo $data['nama'] ?></td>
                  <td>
                    <?php
                    if ($data['jenis_kelamin'] == 0) {
                      echo "Laki-laki";
                    }
                    if ($data['jenis_kelamin'] == 1) {
                      echo "Perempuan";
                    }
                    ?>
                  </td>
                  <td><?php echo $data['tempat_lahir'] ?></td>
                  <td><?php echo date('d/m/Y', strtotime($data['tgl_lahir'])) ?></td>
                  <td><?php echo $data['alamat'] ?></td>
                  <td><?php echo $data['asal_sekolah'] ?></td>
                  <td><?php echo $data['asal_kota'] ?></td>
                  <td><?php echo $data['asal_provinsi'] ?></td>
                  <td><?php echo $data['nohp'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><?php echo $data['nama_ayah'] ?></td>
                  <td><?php echo $data['pekerjaan_ayah'] ?></td>
                  <td><?php echo $data['nohp_ayah'] ?></td>
                  <td><?php echo $data['nama_ibu'] ?></td>
                  <td><?php echo $data['pekerjaan_ibu'] ?></td>
                  <td><?php echo $data['nohp_ibu'] ?></td>                  
                  <td><a href="aksi/aksi_hapuspendaftaran2.php?id_pendaftaran=<?php echo $data['id_pendaftaran']; ?>">
                      <button type="button" class="btn btn-sm btn-primary" onclick="return confirm('Apakah Anda Ingin Menghapus Data Pendaftar?')">Hapus</button></a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- Recent Sales End -->
    <!-- Content End -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>