<html>
    <head>
        <title>Data Imunisasi</title>
    </head>

    <body>
        <h1>PUSKESMAS DESA SUKA HALU</h1>
        <h3>Data Imunisasi Bayi</h3>

        <a href="<?php echo base_url('/Welcome/input') ?>">Tambah Data</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <td><b>No</b></td>
                <td><b>Id Anak</b></td>
                <td><b>Nama Anak</b></td>
                <td><b>Tempat Lahir</b></td>
                <td><b>Tanggal Lahir</b></td>
                <td><b>Usia</b></td>
                <td><b>Jenis Kelamin</b></td>
                <td><b>Nama Ibu</b></td>
                <td><b>Jenis Imunisasi</b></td>
                <td><b>Aksi</b></td>
            </tr>
            <?php 
                $count = 0;
                foreach ($data_imn as $row){
                    $count = $count + 1;
                    ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row->id_anak ?></td>
                <td><?php echo $row->nama_anak ?></td>
                <td><?php echo $row->tempat_lahir ?></td>
                <td><?php echo $row->tanggal_lahir ?></td>
                <td><?php echo $row->usia ?></td>
                <td><?php echo $row->jenis_kelamin ?></td>
                <td><?php echo $row->nama_ibu ?></td>
                <td><?php echo $row->jenis_imunisasi ?></td>
                <td><a href="<?php echo base_url('/Welcome/edit') ?>/<?php echo $row->id_anak ?>">Edit</a> | <a href="<?php echo base_url('/Welcome/fungsiDelete')?>/<?php echo $row->id_anak ?>"> Delete</a></td>

            </tr>
            <?php } ?>
        </table>
    </body>
</html>