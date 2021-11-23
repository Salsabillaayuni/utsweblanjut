<html>
    <head><title>Halaman Input Data</title></head>

    <body>
        <h3>Form Input Data</h3>
        <form action="<?php echo base_url('Welcome/fungsiInput') ?>" method="post">
        <table>


        <form>
         <div class="mb-3">
             <label class="form-label">Id Anak</label>
                <input type="text" class="form-control" name="id_anak" >
         </div>
         <div class="mb-3">
             <label class="form-label">Nama Anak</label>
                <input type="text" class="form-control" name="nama_anak" >
         </div>
         <div class="mb-3">
             <label class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" >
         </div>
         <div class="mb-3">
             <label class="form-label">Tanggal Lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir" >
         </div>
         <div class="mb-3">
             <label class="form-label">Usia</label>
                <input type="text" class="form-control" name="usia" >
         </div>
         <div class="mb-3">
             <label class="form-label">Jenis Kelamin</label>
                <input type="radio" class="form-control" name="jenis_kelamin" value= "Laki-Laki">Laki-Laki<input type="radio" name="jenis_kelamin" value= "Perempuan">Perempuan</td>
         </div>
         <div class="mb-3">
             <label class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" name="nama_ibu" >
         </div>
         <div class="mb-3">
            <label for="disabledSelect" class="form-label">Jenis Imunisasi</label>
                 <select name="jenis imunisasi" class="form-select">
                     <option>Campak</option>
                     <option>Hepatitis</option>
                     <option>Polio</option>
                     <option>Varisela</option>
                     <option>Influenza</option>
      </select>
    </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
           
           
    </body>
</html>