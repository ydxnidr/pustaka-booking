<html>
<head>
<title>Toko Sepatu</title>
</head>
<body>
    <center>
        <form    action="<?= base_url('sepatu/cetak');    ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    <h1>Form Toko Sepatu</h1> </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('nama'); ?> </div> 
                    </td>
                </tr>
                <tr>
                    <th>No. HP</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="no" id="no" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('no'); ?> </div> 
                    </td>
                </tr>
                <tr>
                    <th>Merk Sepatu</th>
                    <th>:</th>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">Pilih Merk</option> 
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kicker">Kicker</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Ukuran Sepatu</th>
                    <th>:</th>
                    <td>
                        <select name="ukuran" id="ukuran">
                            <option value="">Pilih Ukuran</option> 
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Jumlah</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="jumlah" id="jumlah" placeholder="Required">
                        <div class="col-sm-6 col-danger"> <?= form_error('jumlah'); ?> </div> 
                    </div>
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