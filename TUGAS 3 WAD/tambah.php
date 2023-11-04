<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data barang toko ABC</title>
</head>
<body>
    <h1>Tambah data barang toko ABC</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="kodebarang">Kode Barang :</label>
                <input type="text" name="kodebarang" id="kodebarang">
            </li>
            <li>
                <label for="namabarang">Nama Barang :</label>
                <input type="text" name="namabarang" id="namabarang">
            </li>
            <li>
                <label for="hargajual">Harga Barang :</label>
                <input type="text" name="hargajual" id="hargajual">
            </li>
            <li>
                <label for="stokbarang">Stok Barang :</label>
                <input type="text" name="stokbarang" id="stokbarang">
            </li>
            <li>
                <label for="namabarang">Gambar Barang :</label>
                <input type="text" name="Gambar" id="namabarang">
            </li>
            <li>  

<?php
$conn = mysqli_connect("localhost","root","", "phpdasar");

if(isset($_POST["submit"])){
    $kodebarang = $_POST["kodebarang"];
    $namabarang = $_POST["namabarang"]; 
    $gambar = $_POST["Gambar"]; 
    $hargajual= $_POST["hargajual"]; 
    $stokbarang = $_POST["stokbarang"];

    $query= "INSERT INTO tokoabc 
    VALUES
    ('','$kodebarang, $namabarang, $gambar, '$hargajual', '$stokbarang')
    ";
    mysqli_query($conn, $query);
}
?>