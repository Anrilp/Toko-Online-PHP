<?php
session_start();
//menghancurkan session pelanggan
unset($_SESSION["pelanggan"]);
unset($_SESSION["keranjang"]);

echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";
