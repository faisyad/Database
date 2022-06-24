<?php
    include_once "db.php";
    $sql = "SELECT * FROM data_barang";
    $dataBarang = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="pagetwo"><strong>Data Barang</strong></h1>
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Stok</th>
            <th>Harga (per satuan)</th>
        </tr>
        <?php
            if(!$dataBarang->num_rows){
                ?><tr>Tidak ada data customer</tr><?php
            }else{
                while($barang = mysqli_fetch_array($dataBarang)){
                    echo "<tr border='1'>
                            <td>".$barang['Kode_brg']."</td>
                            <td>".$barang['Nama_brg']."</td>
                            <td>".$barang['Jmlh_stok']."</td>
                            <td>".$barang['Harga_brg']."</td>
                         </tr>";
                }
            }
        ?>
    </table>
    <button type="button" class="pagethree-kembali"><a href="datatoko.html">KEMBALI</a></button>
    <button type="button" class="pagethree-transaksi"><a href="tambahdataBarang.php">TAMBAH BARANG</a></button>
    <button type="button"><a href="PDF.php">CETAK PDF</a></button>
</body>
</html>
