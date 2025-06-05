<?php


define("pajak", 0.1);

$Array = array(
    "keybord" => 150000,
    "mouse" => 50000
);



$jumlah = 2;
$nama_barang = "keybord";
$harga = $Array['keybord'];
$harga_non_pajak = $harga * $jumlah;
$pajak_total = $harga * $jumlah * pajak;
$harga_total = $harga_non_pajak + $pajak_total;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>harga</title>
    <style>
        .conteiner {
            border-radius: 10px;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body class="conteiner">
    <h1>Hasil Perhitungan</h1>
    <hr>
    <p>Nama Barang: <?php echo $nama_barang ?> </p>
    <p>Harga Satuan: <?php echo $harga ?></p>
    <p>Total Harga (Sebelum Pajak): <?php echo $harga_non_pajak ?></p>
    <p>Pajak: <?php echo $pajak_total ?></p>
    <p>Total Harga: <?php echo $harga_total ?></p>
</body>

</html>