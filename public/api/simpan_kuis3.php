<?php
header("Access-Control-Allow-Origin: *");

$con = new mysqli("localhost", "researc4_e-siskom", "g~xSopV0N(K{", "researc4_e-siskom");
if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}

$id_siswa = isset($_GET['id']) ? intval($_GET['id']) : 0;
$nilai    = isset($_GET['nilai']) ? intval($_GET['nilai']) : 0;
$waktu    = isset($_GET['waktu']) ? $_GET['waktu'] : "";

if ($id_siswa > 0 && $waktu != "") {
    $cek = $con->prepare("SELECT id_kuis3 FROM kuis3 WHERE id_siswa = ?");
    $cek->bind_param("i", $id_siswa);
    $cek->execute();
    $hasil = $cek->get_result();

    if ($hasil->num_rows > 0) {
        $update = $con->prepare("UPDATE kuis3 SET nilai = ?, waktu = ? WHERE id_siswa = ?");
        $update->bind_param("isi", $nilai, $waktu, $id_siswa);
        $update->execute();
        echo "Data kuis3 diperbarui.";
    } else {
        $insert = $con->prepare("INSERT INTO kuis3 (id_siswa, nilai, waktu) VALUES (?, ?, ?)");
        $insert->bind_param("iis", $id_siswa, $nilai, $waktu);
        $insert->execute();
        echo "Data kuis3 disimpan.";
    }
} else {
    echo "ID siswa, nilai, atau waktu tidak valid.";
}

$con->close();
?>


