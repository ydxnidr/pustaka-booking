<html>
<head>
<title>Toko Sepatu</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Data Pembayaran 
                </th>
            </tr>
            <tr>
                <td colspan="3"><hr>
                </td>
            </tr>
            <tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>No. HP</th>
                <td>:</td>
                <td><?= $no; ?></td>
            </tr>
            <tr>
                <th>Merk Sepatu</th>
                <td>:</td>
                <td><?= $merk; ?></td>
                </tr>
            <tr>
                <th>Ukuran Sepatu</th>
                <td>:</td>
                <td><?= $ukuran; ?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>:</td>
                <td><?= $jumlah; ?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td><?= Rupiah($harga * $jumlah); ?></td>
            </tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('sepatu');?>">Kembali</a>
            </td>
            </tr>
        </table>
    </center> 
</body>
</html>