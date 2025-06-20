<?php

   $conn = new mysqli('localhost', 'root', '', 'toko_buku');
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
?>