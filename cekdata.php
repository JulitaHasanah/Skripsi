<?php
header("Access-Control-Allow-Origin: *");
$con = mysqli_connect("localhost", "root", "", "sistemkomputer");

$nama = $_GET['nama'];
$kelas = $_GET['kelas'];
$password = $_GET['password'];

$query = "SELECT * FROM siswa WHERE nama='$nama' AND kelas='$kelas' AND password='$password'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    echo "terdaftar";
} else {
    echo "belum";
}
mysqli_close($con);
?>
