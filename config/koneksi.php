<?php
// mysqli_connect("hostname","user database","password","nama")
// $koneksi = mysqli_connect("localhost", "root", "", "pasien") or die("Tidak bisa terhubungan ke database");
// mysqli_connect("hostname", "user", "password", "dbname", "port")
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pasien";
$port = 3306;  // Menambahkan port kustom

// Membuat koneksi dengan port kustom

$koneksi = mysqli_connect($servername, $username, $password, $dbname, $port);


// if (!$koneksi) {
//     die("Connection failed: " . mysqli_connect_error());
//
// echo "Connected successfully";
?>
