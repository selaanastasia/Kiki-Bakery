<?php
session_start();
session_destroy(); // Menghancurkan sesi
header('Location:index.php'); // Kembali ke halaman login
exit();
?>