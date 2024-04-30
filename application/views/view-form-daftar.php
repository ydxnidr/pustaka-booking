<html>
<head>
<title>Form Daftar Riwayat Hidup</title>
</head>
<body>
    <center>
        <form    action="<?= base_url('daftar/cetak');    ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    <h1>Form Daftar Riwayat Hidup</h1> </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nim" id="nim" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('nim'); ?> </div> 
                    </td>
                </tr>
                <tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('nama'); ?> </div> 
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="date" name="tanggal" id="tanggal">
                    </tr>
                    <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="tempat" id="tempat" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('tempat'); ?> </div> 
                    </td>
                    </tr>
                    <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('alamat'); ?> </div> 
                    </td>
                    </tr>
                    <td></td>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Submit"> 
                        </td>
                    </tr> 
        </table>
        </form> 
    </center>
</body> 
</html>