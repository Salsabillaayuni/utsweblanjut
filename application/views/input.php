<html>
    <head><title>Halaman Input Data</title></head>

    <body>
        <h3>Form Input Data</h3>
        <form action="<?php echo base_url('Welcome/fungsiInput') ?>" method="post">
        <table>
            <tr>
                <td>Id Anak</td>
                <td>:</td>
                <td><input type="text" name="id_anak"></td>
            </tr>
            <tr>
                <td>Nama Anak</td>
                <td>:</td>
                <td><input type="text" name="nama_anak"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="text" name="usia"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td><input type="text" name="nama_ibu"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Simpan">
            </tr>
            
        </table>
        </form>
    </body>
</html>