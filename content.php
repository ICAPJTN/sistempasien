<?php

@$page = $_GET['page'];
@$aksi = $_GET['actions'];
//seleksi page atau halaman yang dipilih oleh pengguna
//Menggunakan IF
if (empty($page)) {
    require 'beranda.php';
} else {
    // Jika File ada buka di folder Views/arsip_tampil.php
    $file = "views/" . $page . "_" . $aksi . ".php";
    if (file_exists($file)) {
        require "views/" . $page . "_" . $aksi . ".php";
    } else {
        require 'beranda.php';
    }
}
