<?php
   include 'koneksi_db.php'; // Koneksi database

   // Inisialisasi variabel pencarian
   $search_nama = isset($_GET['nama']) ? $_GET[']nama'] : '';
   $search_email = isset($_GET['email']) ? $_GET[']email'] : '';

   // Query untuk menampilkan daftar nama dengan filter pencarian
   $query = "SELECT * FROM pelanggan WHERE 1=1";
   if (!empty($search_nama)) {
       $query .= " AND Nama LIKE '%" . $conn->real_escape_string($search_nama) . "%'";
   }
   if (!empty($search_email)) {
       $query .= " AND Email LIKE '%" . $conn->real_escape_string($search_email) . "%'";
   }
   $result = $conn->query($query);
?>
