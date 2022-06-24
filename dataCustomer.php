<?php
    include_once "db.php";
    $sql = "SELECT * FROM data_cust";
    $dataCustomer = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Customer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="pagetwo"><strong>Data Customer</strong></h1>
    <h3 class="pilih"><strong>KLIK KODE CUSTOMER</strong></h3>
    <form action="" method="post">
                <input type="text" name="keyword" id="keyword" size="25" placeholder="Masukan Keyword Pencarian" autocomplete="off" autofocus>
                <button type="submit" name="cari"> Search! </button>
            </form>
    <table border="1">
        <tr>
            <th>Kode Customer</th>
            <th>Nama Customer</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
        </tr>
        <?php
            if(!$dataCustomer->num_rows){
                ?><tr>Tidak ada data customer</tr><?php
            }else{
                while($customer = mysqli_fetch_array($dataCustomer)){
                    echo "<tr border='1'>
                            <td><a href='Cust".$customer['Kode_cust'].".php'>".$customer['Kode_cust']."</a></td>
                            <td>".$customer['Nama_cust']."</td>
                            <td>".$customer['Alamat']."</td>
                            <td>".$customer['No_Telp']."</td>
                         </tr>";
                }
            }
        ?>
    </table>
    <button type="button" class="pagetwo"><a href="datatoko.html">KEMBALI</a></button>
</body>
</html>