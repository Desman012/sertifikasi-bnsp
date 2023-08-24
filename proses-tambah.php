<?php
if (isset($_POST['simpan'])) {
    include_once 'koneksi.php';

    // Mendapatkan data dari form
    $getNama = $_POST['inputNama'];
    $getEmail = $_POST['inputEmail'];
    $getNohp = $_POST['inputNohp'];
    $getSemester = $_POST['inputSemester'];
    $getIpk = $_POST['inputIpk'];
    $getJns_beasiswa = $_POST['inputJns_beasiswa'];
    $getStatus_ajuan = 'Belum di verifikasi';
    // Query tambah data
    $sql = "INSERT INTO tbl_beasiswa (Nama, Email, No_hp, Semester, Ipk, Jns_beasiswa, Dir_file, Status_ajuan) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    // Tempat dimana file disimpan
    $target_dir = "upload/";

    // mengecek apakah folder upload sudah ada atau belum
    if(!file_exists($target_dir)){
        mkdir($target_dir, 0777, true);
    }
    
    // mengecek apakah ada file atau tidak
    if (($_FILES['inputSyaratFile']['name'] != "")) {
        $file = $_FILES['inputSyaratFile']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['inputSyaratFile']['tmp_name'];
        $path_filename_ext = $target_dir . $getNama . "-" . $filename . "." . $ext;
        move_uploaded_file($temp_name, $path_filename_ext);
    }
    // Prepare query statement
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssss", $getNama, $getEmail, $getNohp, $getSemester, $getIpk, $getJns_beasiswa, $path_filename_ext, $getStatus_ajuan);
        if ($stmt->execute()) {
            header('Location: hasil.php');
        }
        // Jika terjadi error
    } else {
        echo "Terjadi kesalahan: " . $sql . "<br/>" . $conn->error;
        echo $stmt->error;
    }
    // Tutup koneksi
    $conn->close();
} else {
    header('Location:index.php');
}
