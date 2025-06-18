<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Koneksi ke database
$con = mysqli_connect("localhost", "root", "", "sistemkomputer");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo json_encode(["status" => "error", "message" => "Gagal koneksi ke database"]);
    exit();
}

// Ambil data dari GET
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$kelas = isset($_GET['kelas']) ? $_GET['kelas'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

// Validasi input
if ($nama == '' || $kelas == '' || $password == '') {
    echo json_encode(["status" => "error", "message" => "Semua data wajib diisi"]);
    exit();
}

// Simpan ke database
$query = "INSERT INTO siswa (nama, kelas, password) VALUES ('$nama', '$kelas', '$password')";
$result = mysqli_query($con, $query);

if ($result) {
    echo json_encode(["status" => "success", "message" => "Registrasi berhasil"]);
} else {
    echo json_encode(["status" => "error", "message" => "Registrasi gagal"]);
}

$cek = mysqli_query($con, "SELECT * FROM siswa WHERE nama='$nama'");
if (mysqli_num_rows($cek) > 0) {
    echo json_encode(["status" => "error", "message" => "Nama sudah terdaftar"]);
    exit();
}

mysqli_close($con);
?>
