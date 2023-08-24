<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Link JQuery DataTable -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
  <title>Hasil</title>
</head>

<body>

  <script>
    $(document).ready(function() {
      // Memanggil fungsi JQuery DataTables
      $('#table').DataTable();
    });
  </script>

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
            <a class="nav-link" href="form-tambah.php">Daftar</a>
          </li>
          <!-- navbar menu hasil -->
          <li class="nav-item px-lg-5 fw-bold fs-5">
            <a class="nav-link active" href="hasil.php">Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container w-100 mt-5">
    <!-- Section Header -->
    <header>
      <h1 class="card-title text-center my-3">Daftar Pemohon Beasiswa</h1>
    </header>

    <!-- section main -->
    <main>
      <div class="card mt-3">
        <div class="card-body">

          <?php

          include_once 'koneksi.php';

          // Query untuk menampilkan semua data dari tabel
          $sql = "SELECT * FROM tbl_beasiswa";
          $result = $conn->query($sql);

          // Validasi data kosong/tidak
          if ($result->num_rows > 0) {

          ?>

            <!-- Tabel Data -->
            <table id="table" class="table table-bordered border">
              <!-- Judul Tabel -->
              <thead class="table-secondary">
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Nomor HP</th>
                  <th>Semester</th>
                  <th>IPK</th>
                  <th>Jenis Beasiswa</th>
                  <th>Berkas Persyaratan</th>
                  <th>Status Ajuan</th>
                </tr>
              </thead>
              <tbody>

                <?php

                // Loop data ke tabel
                while ($row = $result->fetch_assoc()) {

                ?>
                  <tr>
                    <td><?= $row['Nama'] ?></td>
                    <td><?= $row['Email'] ?></td>
                    <td><?= $row['No_hp'] ?></td>
                    <td><?= $row['Semester'] ?></td>
                    <td><?= $row['Ipk'] ?></td>
                    <td><?= $row['Jns_beasiswa'] ?></td>
                    <td>
                        <?php 
                        $filename = json_encode($row['Dir_file']); 
                        echo(explode('\/',$filename)[1]); 
                        ?>
                    </td>
                    <td><?= $row['Status_ajuan'] ?></td>
                  </tr>
                <?php
                }

                // Tutup koneksi
                $conn->close();

                // Jika data kosong
              } else {

                ?>

                <!-- Menampilkan pesan apabila tidak ada data -->
                <div class="alert alert-danger">Data tidak ada</div>

              <?php } ?>

              </tbody>
            </table>
        </div>
      </div>
    </main>
  </div>
</body>

</html>