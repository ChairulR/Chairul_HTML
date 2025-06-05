<!DOCTYPE html>
<html>
<head>
    <title>GO</title>
</head>
<body>

<?php
echo "<h3>NO 3</h3>";
$hewan = [
    1 => "Kucing",
    2 => "Anjing", 
    3 => "Burung",
    4 => "Kelinci",
];
foreach ($hewan as $key => $value) {
    echo "Hewan ke-$key adalah $value<br>";
}
?>
</body>
</html>