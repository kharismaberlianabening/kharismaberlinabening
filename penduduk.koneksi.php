<?php
$host = "localhost"; // Menyiapkan variabel 'host' untuk mendefinisikan nama server
$user = "root"; // Menyiapkan variabel 'user' untuk mendefinisikan nama user database MySQL
$password = ""; // Menyiapkan variabel 'password' untuk mendefinisikan password database MySQL
$database = "penduduk"; // Menyiapkan variabel 'database' untuk mendefinisikan nama database MySQL
 
$condb = mysql_connect($host,$user,$password); // Melakukan koneksi
$mysql = mysql_select_db($database,$condb); // Memilih database yang sudah didefinisikan dengan perintah 'mysql_select_db'
?>
