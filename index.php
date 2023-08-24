<?php
include_once 'config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jenis Beasiswa</title>

  <!-- Link Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm mx-5 mt-3 navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
          <!-- navbar menu beasiswa -->
          <li class="nav-item px-lg-5 fw-bold fs-5">
            <a class="nav-link active" href="index.php">Pilihan Beasiswa</a>
          </li>
          <!-- navbar menu daftar -->
          <li class="nav-item px-lg-5 fw-bold fs-5">
            <a class="nav-link" href="form-tambah.php">Daftar</a>
          </li>
          <!-- navbar menu hasil -->
          <li class="nav-item px-lg-5 fw-bold fs-5">
            <a class="nav-link" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <main class="text-center my-3 py-5">
    <!-- section header -->
    <header>
      <h1 class="mb-4 fs-3">Jenis Beasiswa</h1>
    </header>

    <!-- section utama -->
    <div class="row mt-5 px-4">
      <div class="col-sm-6">
        <div class="card w-75 text-start m-auto mb-4">
          <div class="card-header fw-bold">
            Beasiswa Akademik
          </div>
          <div class="card-body">
            <p class="card-text">Beasiswa ini diberikan untuk mahasiswa yang berprestasi dalam bidang akademik.</p>
            <p class="card-text">Minimum IPK yang diterima adalah 3.00</p>
            <a href="form-tambah.php" class="btn btn-primary">Daftar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card w-75 text-start m-auto mb-4">
        <div class="card-header fw-bold">
            Beasiswa Non-Akademik
          </div>
          <div class="card-body">
            <p class="card-text">Beasiswa ini diberikan untuk mahasiswa yang aktif dalam bidang no-akademik, seperti basket, voli, dll</p>
            <p class="card-text">Minimum IPK yang diterima adalah 3.00</p>
            <a href="form-tambah.php" class="btn btn-primary">Daftar</a>
          </div>
        </div>
      </div>
    </div>

  </main>
</body>

</html>
