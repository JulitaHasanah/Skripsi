<?php
header("Access-Control-Allow-Origin: *");
// Koneksi ke database
$con = mysqli_connect("localhost", "researc4_e-siskom", "g~xSopV0N(K{", "researc4_e-siskom");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
// Ambil data dari GET
$nama = $_GET['fname'];
$password = $_GET['fpass'];
$qz = "SELECT id_siswa FROM siswa WHERE nama='" . $nama . "' AND password='" . $password . "'";
$qz = str_replace("\'", "", $qz);
// Eksekusi query
$result = mysqli_query($con, $qz);
// Ambil hasil
while ($row = mysqli_fetch_array($result)) {
    echo $row['id_siswa'];
}
mysqli_close($con);
?>

