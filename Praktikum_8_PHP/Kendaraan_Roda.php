<!DOCTYPE html>
<html>
<head>
    <title>GO</title>
</head>
<body>

<?php
echo "<h3>NO 1</h3>";
$kendaraan = "Mobil";
switch ($kendaraan) {
   case "Mobil":
       echo "Mobil Kendaraan roda empat";
       break;
   case "Motor":
       echo "Motor Kendaraan roda dua";
       break;
   case "Bajai":
       echo "Kendaraan roda tiga";
       break;
   default:
       echo "Kendaraan anomali.";
   }

?>
</body>
</html>