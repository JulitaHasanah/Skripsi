<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "sistemkomputer"; // Ganti jika nama database kamu berbeda

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id_siswa = isset($_GET['id_siswa']) ? $_GET['id_siswa'] : '';

$sql = "SELECT * FROM progres WHERE id_siswa = '$id_siswa'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    // Kalau belum ada data progres, kirim default
    echo json_encode([
        "kunci_materi2" => 0,
        "kunci_materi3" => 0,
        "kunci_materi4" => 0
    ]);
}

$conn->close();
?>
