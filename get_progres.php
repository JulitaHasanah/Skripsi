<?php
$conn = new mysqli("localhost", "root", "", "sistemkomputer");
$id_siswa = $_GET["id_siswa"];

$q = $conn->query("SELECT * FROM progres_siswa WHERE id_siswa = '$id_siswa'");
$d = $q->fetch_assoc();

echo $d["kunci_materi2"] . "|" . $d["kunci_materi3"] . "|" . $d["kunci_materi4"];
?>
