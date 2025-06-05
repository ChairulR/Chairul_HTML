<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai Mahasiswa</title>
</head>
<body>

<h2>Form Nilai Mahasiswa</h2>

<form method="post" action="latihan_nilai.php">
    Nama: <input type="text" name="nama" required><br><br>
    Nilai: <input type="number" name="nilai" min="0" max="100" required><br><br>
    <input type="submit" value="Proses">
</form>

</body>
</html>
