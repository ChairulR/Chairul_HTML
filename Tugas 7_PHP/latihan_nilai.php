<!DOCTYPE html>
<html>
<head>
    <title>Hasil Penilaian</title>
</head>
<body>

<h2>Penilaian Mahasiswa</h2>

<?php
if (!empty($_POST)) {
    $nama = $_POST['nama'];
    $nilai = (int)$_POST['nilai'];
    $predikat = "";
    $status = "";

    if ($nilai >= 85) {
        $predikat = "A";
    } elseif ($nilai >= 75) {
        $predikat = "B";
    } elseif ($nilai >= 65) {
        $predikat = "C";
    } elseif ($nilai >= 50) {
        $predikat = "D";
    } else {
        $predikat = "E";
    }

    $status = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai: $nilai<br>";
    echo "Predikat: $predikat<br>";
    echo "Status: $status<br>";
} else {
    echo "Invalid";
}
?>

</body>
</html>
