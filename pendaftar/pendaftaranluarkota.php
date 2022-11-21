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
        <div class="container-fluid pt-5 pb-5 px-5">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <h5 class="mb-4"><i>Formulir Pendaftaran Online</i></h5>
                </div>

                <div>
                    <form action="aksi/aksi_luarkota.php" method="post">
                        <div class="row mb-4 d-flex align-items-center justify-content-center">
                            <label class="col-form-label" style="text-align:left; width:13%;">Nama</label>
                            <div class="w-25">
                                <input class="form-control" name="nama" placeholder="Nama" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Jenis Kelamin</label>
                            <div class="w-25">
                                <select class="form-select" name="jenis_kelamin" autocomplete="off" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="0">Laki-laki</option>
                                    <option value="1">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Tempat Lahir</label>
                            <div class="w-25">
                                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Tanggal Lahir</label>
                            <div class="w-25">
                                <input type="date" class="form-control" name="tgl_lahir" placeholder="DD/MM/YY" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Alamat</label>
                            <div class="w-25">
                                <input class="form-control" name="alamat" placeholder="Alamat Tempat Tinggal" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Asal Sekolah</label>
                            <div class="w-25">
                                <input class="form-control" name="asal_sekolah" placeholder="Asal Sekolah" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Asal Kota</label>
                            <div class="w-25">
                                <input class="form-control" name="asal_kota" placeholder="Asal Kota" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Asal Provinsi</label>
                            <div class="w-25">
                                <input class="form-control" name="asal_provinsi" placeholder="Asal Provinsi" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Nomor HP</label>
                            <div class="w-25">
                                <input class="form-control" name="nohp" placeholder="Nomor HP" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Alamat Email</label>
                            <div class="w-25">
                                <input type="email" class="form-control" name="email" placeholder="Alamat Email" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Nama Ayah</label>
                            <div class="w-25">
                                <input class="form-control" name="nama_ayah" placeholder="Nama Ayah" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%">Pekerjaan Ayah</label>
                            <div class="w-25">
                                <input class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Nomor HP Ayah</label>
                            <div class="w-25">
                                <input class="form-control" name="nohp_ayah" placeholder="Nomor HP Ayah" autocomplete="off">
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Nama Ibu</label>
                            <div class="w-25">
                                <input class="form-control" name="nama_ibu" placeholder="Nama Ibu" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Pekerjaan Ibu</label>
                            <div class="w-25">
                                <input class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex align-items-center justify-content-center mb-4">
                            <label class="col-form-label" style="text-align:left; width:13%;">Nomor HP Ibu</label>
                            <div class="w-25">
                                <input class="form-control" name="nohp_ibu" placeholder="Nomor HP Ibu" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-0 pt-4">
                            <button type="submit" class="btn btn-primary px-4 ms-2">Kirim</button>
                        </div>
                    </form>
                </div><br>

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