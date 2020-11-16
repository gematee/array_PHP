<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
        </tr>
        <tr>
            <td>1001</td>
            <td>Sabun</td>
            <td>Rp. 1500</td>
        </tr>
        <tr>
            <td>1002</td>
            <td>Permen</td>
            <td>Rp. 5.600</td>
        </tr>
        <tr>
            <td>1003</td>
            <td>Pasta Gigi</td>
            <td>Rp. 4560</td>
        </tr>
        <tr>
            <td>1004</td>
            <td>Madu</td>
            <td>Rp.30000</td>
        </tr>
        <tr>
            <td>1005</td>
            <td>Kecap</td>
            <td>Rp. 7250</td>
        </tr>
        <tr>
            <td>1006</td>
            <td>Saus</td>
            <td>Rp. 6700</td>
        </tr>
            <tr>
            <td>1007</td>
            <td>Gula</td>
            <td>Rp. 8900</td>
        </tr>
        <tr>
            <td>1008</td>
            <td>Deterjen</td>
            <td>Rp. 7100</td>
        </tr>
        <tr>
            <td>1009</td>
            <td>Pembersih Lantai</td>
            <td>Rp. 6450</td>
        </tr>
        <tr>
            <td>1010</td>
            <td>Snack</td>
            <td>Rp. 5600</td>
        </tr>                                                                                       
    </table>
    <br>
    <?php
        $banyak = $_POST['banyak'];
        echo"<form action ='hasil.php' method='post'";
        echo "Masukkan Kode barang yang Dibeli dan Banyaknya<br>";
        for($i=0;$i<=$banyak-1;$i++){
            echo "Kode Barang ke-".($i+1)."<input type='text' name='barang$i'";
            echo "<br><br>";
            echo "</form>";
        }
    ?>
</body>
</html>