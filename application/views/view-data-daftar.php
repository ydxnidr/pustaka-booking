<html>
<head>
<title>Tampil Daftar Riwayat Hidup</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    <h1>Tampilan Riwayat Hidup</h1>
                </th>
            </tr>
            <tr>
                <td colspan="3"><hr>
                </td>
            </tr>
            <tr>
                <td>NIM</td> 
                <td>:</td>
                <td>
                    <?= $nim; ?> 
                </td>
            </tr>
            <tr>
                <td>Nama</td> 
                <td>:</td>
                <td>
                    <?= $nama; ?> 
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td> 
                <td>:</td>
                <td>
                    <?= $tanggal; ?> 
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td> 
                <td>:</td>
                <td>
                    <?= $tempat; ?> 
                </td>
            </tr>
            <tr>
                <td>Alamat</td> 
                <td>:</td>
                <td>
                    <?= $alamat; ?> 
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('daftar');?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center> 
</body>

</html>