<?php

require 'functions.php';

$brg = query("SELECT * FROM tokoabc"); 
?>

<!DOCTYPE html>
<html lang="en">
<head><title>HALAMAN ADMIN</title></head>
<body>
    <h1>Daftar BARANG TOKO ABC</h1>
    <a href="tambah.php">Tambah Data Barang Toko ABC</a>
    <br><br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
        
        </tr>
        <?php $i =1; ?>