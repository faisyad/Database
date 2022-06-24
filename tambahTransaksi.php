<?php
    include_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="pagethree"><strong>Tambah Transaksi</strong></h1>
    <form action="tambah.php" method="POST">
        <table class="transaksi">
                <tr><td>Kode Customer<td>:</td> </td><td><input type="text" name="kode_customer" placeholder="Kode Customer" required></td></tr>
                <tr><td>Tanggal Transaksi<td>:</td> </td><td><input type="date" name="tanggal_transaksi" placeholder="Tanggal Transaksi" required></td></tr>
                <tr><td>Kode Barang<td>:</td> </td><td><input type="text" name="kode_barang"  placeholder="Kode Barang" required></td></tr>
                <tr><td>Harga<td>:</td> </td><td><input type="text" name="harga" required></td></tr><br>
                <tr><td>Jumlah Beli<td>:</td> </td><td><input type="number" name="jumlah_beli" min="1" max="50" placeholder="Jumlah Beli" required></td></tr>                
                <br><input type="checkbox" name="agreement" value="agree" /> I Agree with <a href="#">Terms</a> and <a href="#">Condition</a>
        </table>    
        <br><button type="submit" name="submit" class="submit" class="pagethree">SUBMIT</button>
    </form>
    <button type="button" class="pagethree-kembali"><a href="dataCustomer.php">KEMBALI</a></button>
    <button type="button" class="pagethree-transaksi"><a href="datatoko.html">MENU AWAL</a></button>
</body>
</html>