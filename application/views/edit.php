<html>
    <head>
        <title>Halaman Edit Data</title>
    </head>
    <body>
        <h3>Form Edit Data</h3>
        <form action="<?php echo base_url('Welcome/fungsiEdit') ?>" method="post">
        <table>
            <tr>
                <td>ID Anak</td>
                <td>:</td>
                <td>
                    <input type="text">
                    <input type="hidden" name="ID_anak" value="<?php echo $queryImnDetail->id_anak ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama Anak</td>
                <td>:</td>
                <td><input type="text" name="nama_anak" value="<?php echo $queryImnDetail->nama_anak ?>" ></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $queryImnDetail->tempat_lahir ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="tanggal_lahir" value="<?php echo $queryImnDetail->tanggal_lahir ?>"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type="text" name="usia" value="<?php echo $queryImnDetail->usia ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $queryImnDetail->jenis_kelamin ?>"></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td><input type="text" name="nama_ibu" value="<?php echo $queryImnDetail->nama_ibu ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Simpan">
            </tr>
            
        </table>
</form>
</body>
</html>