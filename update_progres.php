<?php
$id = $_GET["id"];
$materi = $_GET["materi"];
$conn = mysqli_connect("localhost", "root", "", "sistemkomputer");

if ($conn) {
    $update = mysqli_query($conn, "UPDATE progres_siswa SET kunci_materi$materi = 1 WHERE id_siswa = '$id'");
    if ($update) {
        echo "sukses";
    } else {
        echo "gagal update";
    }
} else {
    echo "koneksi gagal";
}
?>
