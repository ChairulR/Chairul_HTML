<?php include("connect.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | Coding</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah daftar</h3>
    </header>

    <nav>
        <a href="tambah-siswa.php">Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Ukt</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswa";
            $query = mysqli_query($db, $sql);

            while ($siswa = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $siswa['NPM'] . "</td>";
                echo "<td>" . $siswa['Nama'] . "</td>";
                echo "<td>" . $siswa['Prodi'] . "</td>";
                echo "<td>" . $siswa['Semester'] . "</td>";
                echo "<td>" . $siswa['Ukt'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>
