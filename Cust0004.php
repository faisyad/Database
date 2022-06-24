<?php
    include_once "db.php";
    $sql = "SELECT * FROM transaksi WHERE Kode_cust='0004'";
    $dataTransaksi = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="pagethree"><strong>Data Transaksi Customer ID: 0004</strong></h1>
    <table border="1" class="cust">
        <tr>
            <th>Kode Customer</th>
            <th>Tanggal Transaksi</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga</th>
        </tr>
        <?php
            if(!$dataTransaksi->num_rows){
                ?><tr>Tidak ada data customer</tr><?php
            }else{
                while($transaksi = mysqli_fetch_array($dataTransaksi)){
                    echo "<tr>
                            <td>".$transaksi['Kode_cust']."</td>
                            <td>".$transaksi['Tgl_transaksi']."</td>
                            <td>".$transaksi['Kode_brg']."</td>
                            <td>".$transaksi['Jmlh_beli']."</td>
                            <td>".$transaksi['Harga']."</td>
                         </tr>";
                         $id = $transaksi['Kode_cust'];
                }
            }
        ?>
    </table>
    <button type="button" class="pagethree-kembali"><a href="dataCustomer.php">KEMBALI</a></button>
    <button type="button" class="pagethree-transaksi"><a href="tambahTransaksi.php">TAMBAH TRANSAKSI</a></button>
    <button type="button" class="pagethree-awal"><a href="datatoko.html">MENU AWAL</a></button>
    <button type="button" class="pagethree-edit"><a href='PDF.php?id=<?= $id ?>'>CETAK PDF</a></button>
</body>
</html>