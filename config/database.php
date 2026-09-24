<?php
$host = "sql312.infinityfree.com";
$db   = "if0_42997956_db_hmpsif";
$user = "if0_42997956";
$pass = "moIh5cMk4TlLuIA";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Koneksi database gagal. Pastikan MySQL aktif dan database if0_42997956_db_hmpsif sudah dibuat.");
}
?>