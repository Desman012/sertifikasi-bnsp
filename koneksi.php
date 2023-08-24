<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "db_beasiswa";

// membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $db);

// Jika koneksi error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
