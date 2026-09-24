<?php
$host = "sql312.infinityfree.com";
$db   = "if0_42997956_db_hmpsif";
$user = "if0_42997956";
$pass = "moIh5cMk4TlLuIA";
$charset = "utf8mb4";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");