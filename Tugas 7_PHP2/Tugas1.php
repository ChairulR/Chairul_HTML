<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan10</title>
</head>
<body>

<h2>Form Nilai Mahasiswa</h2>
<form method="post" action="">
    Nama: <input type="text" name="nama"><br><br>
    Nilai: <input type="number" name="nilai"><br><br>
    <input type="submit" value="Proses">
</form>

<h2>Form Nilai Mahasiswa</h2>

<form method="post" action="">
    Nama: <input type="text" name="nama" required><br><br>
    Nilai: <input type="number" name="nilai" min="0" max="100" required><br><br>
    <input type="submit" value="Proses">
</form>

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

    echo "<h3>Hasil Penilaian</h3>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai: $nilai<br>";
    echo "Predikat: $predikat<br>";
    echo "Status: $status<br>";
}
?>

</body>
</html>