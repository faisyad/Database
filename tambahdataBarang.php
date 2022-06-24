<?php
    include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="pagethree"><strong>Tambah Barang</strong></h1>
    <form action="tambahbrg.php" method="POST">
        <table class="transaksi">
                <tr><td>Kode Barang<td>:</td> </td><td><input type="text" name="Kode_brg" placeholder="Kode Barang" required></td></tr>
                <tr><td>Nama Barang<td>:</td> </td><td><input type="text" name="Nama_brg" placeholder="Nama Barang" required></td></tr>
                <tr><td>Jumlah Stok<td>:</td> </td><td><input type="number" name="Jmlh_stok" min="1" max="50" placeholder="Jumlah Stok" required></td></tr>
                <tr><td>Harga (Per Satuan)<td>:</td> </td><td><input type="text" name="Harga_brg" required></td></tr>
        </table>
        <button type="submit" name="submit" class="submit" class="pagethree">SUBMIT</button> 
    </form>
    <button type="button" class="pagethree-kembali"><a href="dataBarang.php">KEMBALI</a></button>
    <button type="button" class="pagethree-transaksi"><a href="datatoko.html">MENU AWAL</a></button>
</body>
</html>