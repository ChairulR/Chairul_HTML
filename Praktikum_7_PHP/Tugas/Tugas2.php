<!DOCTYPE html>
<html>
<head>
    <title>Diskon Pembayaran Mahasiswa</title>
</head>
<body>

<h2>Form Diskon UKT Mahasiswa</h2>

<form method="post" action="">
    NPM: <input type="text" name="npm" required><br><br>
    Nama: <input type="text" name="nama" required><br><br>
    Prodi: <input type="text" name="prodi" required><br><br>
    Semester: <input type="number" name="semester" required><br><br>
    Biaya UKT (Rp): <input type="number" name="ukt" required><br><br>
    <input type="submit" value="Proses">
</form>

<?php
if (!empty($_POST)) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = (int)$_POST['semester'];
    $ukt = (int)$_POST['ukt'];

    $diskon = 0;
    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon += 5;
        }
    }

    $potongan = $ukt * $diskon / 100;
    $total_bayar = $ukt - $potongan;

    function format_rupiah($angka) {
        return "Rp. " . number_format($angka, 0, ',', '.');
    }

    echo "<h3>Luaran yang Diharuskan</h3>";
    echo "NPM : $npm<br>";
    echo "NAMA : " . strtoupper($nama) . "<br>";
    echo "PRODI : " . strtoupper($prodi) . "<br>";
    echo "SEMESTER : $semester<br>";
    echo "BIAYA UKT : " . format_rupiah($ukt) . "<br>";
    echo "DISKON : $diskon%<br>";
    echo "YANG HARUS DIBAYAR : " . format_rupiah($total_bayar) . "<br>";
}
?>

</body>
</html>
