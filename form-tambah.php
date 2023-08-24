<?php
  include_once 'config.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pengajuan Beasiswa</title>

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
            <a class="nav-link" href="index.php">Pilihan Beasiswa</a>
          </li>
          <!-- navbar menu daftar -->
          <li class="nav-item px-lg-5 fw-bold fs-5">
            <a class="nav-link active" href="form-tambah.php">Daftar</a>
          </li>
          <!-- navbar menu hasil -->
          <li class="nav-item px-lg-5 fw-bold fs-5">
            <a class="nav-link" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="text-center my-5 py-5">
    <!-- section header -->
  <header>
  <h1 class="mb-4 fs-4">Daftar Beasiswa</h1>
  </header> 

      <!-- section utama -->
    <div class="card w-50 m-auto">
      <div class="card-header">
        <p class="m-0 p-0 text-start">Registrasi Beasiswa</p>
      </div>
      <div class="card-body ps-5 text-start">
        <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
          <!-- field nama -->
          <div class="row mb-3">
            <label for="inputNama" class="col-sm-5 col-form-label">Masukkan Nama</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="inputNama" id="inputNama" required>
            </div>
          </div>
          <!-- field email -->
          <div class="row mb-3">
            <label for="inputEmail" class="col-sm-5 col-form-label">Masukkan Email</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" name="inputEmail" id="inputEmail" required>
            </div>
          </div>
          <!-- field nomor HP -->
          <div class="row mb-3">
            <label for="inputNohp" class="col-sm-5 col-form-label">nomor HP</label>
            <div class="col-sm-6">
              <input type="number" class="form-control" name="inputNohp" id="inputNohp" required>
            </div>
          </div>
          <!-- field Semester -->
          <div class="row mb-3">
            <label for="inputSemester" class="col-sm-5 col-form-label">Semester saat ini</label>
            <div class="col-sm-6">
              <select class="form-select" name="inputSemester" id="inputSemester" required>
              <option name="placeholder" hidden>Pilih</option>
                  <!-- Membuat option dengan loop -->
                <?php while ($semester >= 1) { ?>
                  <option value="<?= $semester ?>"><?= $semester ?></option>
                <?php $semester--; } ?>
              </select>
            </div>
          </div>
          <!-- field IPK -->
          <div class="row mb-3">
            <label for="inputIpk" class="col-sm-5 col-form-label">IPK Terakhir</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="inputIpk" value="<?= $ipk ?>" disabled>
              <input type="hidden" name="inputIpk" value="<?= $ipk ?>">
            </div>
          </div>
          <!-- field Beasiswa -->
          <div class="row mb-3">
            <label for="inputJns_beasiswa" class="col-sm-5 col-form-label" required>Pilihan Beasiswa</label>
            <div class="col-sm-6">
              <select class="form-select" name="inputJns_beasiswa" id="inputBeasiswa" <?php if($ipk<3){ ?> disabled <?php } ?>  >
                <option name="placeholder" hidden>Pilihan Beasiswa</option>
                <!-- membuat option dari data file config.php -->
                <?php 
                foreach ($beasiswa as $value) { 
                ?>
                  <option value="<?= $value ?>"><?= $value ?></option>
                <?php 
                  } 
                ?>
              </select>
            </div>
          </div>
          <!-- field file persyaratan beasiswa -->
          <div class="row mb-3">
            <label for="inputSyaratFile" class="col-sm-5 col-form-label">Upload Berkas Syarat</label>
            <div class="col-sm-6">
              <input type="file" accept="application/pdf" class="form-control" name="inputSyaratFile" id="inputSyaratFile" <?php if($ipk<3){ ?> disabled <?php } ?> required >
            </div>
          </div>

          <div class="row mt-5">
            <!-- Tombol Simpan -->
              <div class="col-6">
              <button type="submit" name="simpan" class="btn btn-primary px-3" <?php if($ipk<3){ ?> disabled <?php } ?>>Daftar</button>
              </div>
              <!-- Tombol batal -->
              <div class="col offset-1">
              <button type="button" onclick="window.location.href='index.php'" class="btn btn-success px-3">Batal</button>
              </div>
            </div>
        </form>
      </div>
      <div class="card-footer">
      </div>
    </div>
  </main>
</body>
</html>
