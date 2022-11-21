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
    <!-- Content Start -->
    <div class="content" style="margin-left: 0; width:100%;">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="../homepage.php" class="navbar-brand mx-4" style="margin-top:0.5rem;">
                <h5 class="text-primary">
                    <img class="me-lg-2" src="../img/icon-sjn200.png" alt="" style="width: 50px; height: 50px;">PPDB SMA Srijaya Negara
                </h5>
            </a>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <b>Pendaftaran</b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="pendaftarandalamkota.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Pendaftaran Dalam Kota</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="pendaftaranluarkota.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Pendaftaran Luar Kota</h6>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <b>Jadwal</b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="jadwalpendaftaran.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Jadwal Pendaftaran</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="jadwalwawancara.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Jadwal Wawancara</h6>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <b>Informasi</b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="panduanpendaftaran.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Panduan Pendaftaran</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="persyaratanberkas.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Persyaratan Berkas</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="pendaftarlulus.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Pendaftar Lulus</h6>
                        </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <b>Hubungi Kami</b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="informasikontak.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Informasi Kontak</h6>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="faq.php" class="dropdown-item">
                            <h6 class="fw-normal mb-0">FAQ</h6>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Recent Sales Start -->
        <div class="container-fluid pt-5 px-5">
            <div class="bg-secondary rounded py-4 px-5">
                <div class="d-flex align-items-center justify-content-center mb-3">
                    <h5 class="mb-2"><i>Pendaftar Lulus</i></h5>
                </div>
                <p>Berikut adalah daftar nama pendaftar yang telah dinyatakan lulus/diterima di SMA Srijaya Negara Palembang Tahun Ajaran 2022/2023.</p>
            </div>
        </div>
        <!-- Recent Sales End -->

        <!-- Recent Sales Start -->
        <div class="container-fluid pb-5 px-5" style="padding-top:2rem;">
            <div class="bg-secondary text-center rounded pt-4 pb-2 px-4">
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Asal Sekolah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../koneksi.php';

                            $query = mysqli_query($db, "SELECT * FROM tb_lulus INNER JOIN tb_pendaftaran ON tb_lulus.id_pendaftaran = tb_pendaftaran.id_pendaftaran");
                            $nomor = 0;
                            while ($data = mysqli_fetch_array($query)) {

                                $nomor++;
                            ?>
                                <tr>
                                    <td><?php echo $nomor ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['asal_sekolah'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->

    </div>
    <!-- Content End -->

    <!-- Footer Start -->
    <div class="container-fluid pt-5 px-0">
        <div class="bg-secondary rounded-top p-4">
            <div class="text-center">
                <a href="#">Website</a> Penerimaan Peserta Didik Baru
            </div>
            <div class="text-center">
                <b>SMA Srijaya Negara Palembang</b>
            </div>
            <div class="text-center">
                Tahun Ajaran<a href="#"> 2022/2023</a>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>