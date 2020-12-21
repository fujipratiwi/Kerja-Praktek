 <div class="panel panel-default">
     <div class="panel-heading">
         Tambah Data
     </div>
     <div class="panel-body">

         <div class="row">
             <div class="col-md-12">

                 <form method="POST">
                     <div class="form-group">
                         <label>NIS</label>
                         <input class="form-control" name="nis" />
                     </div>

                     <div class="form-group">
                         <label>Nama</label>
                         <input class="form-control" name="nama" />
                     </div>

                     <div class="form-group">
                         <label>Tempat Lahir</label>
                         <input class="form-control" name="tempat_lahir" />
                     </div>

                     <div class="form-group">
                         <label>Tanggal Lahir</label>
                         <input class="form-control" type="date" name="tgl_lahir" />
                     </div>


                     <div class="form-group">
                         <label>Jenis Kelamin</label>
                         <select class="form-control" name="jk">
                             <option value="L">Laki - Laki</option>
                             <option value="P">Perumpuan</option>
                         </select>
                     </div>

                     <div class="form-group">
                         <label>Jurusan</label>
                         <select class="form-control" name="jurusan">
                             <option value="TKJ">Teknik Komputer dan Jaringan</option>
                             <option value="TSM">Teknik Sepeda Motor</option>
                         </select>
                     </div>

                     <div>
                         <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">


                     </div>

             </div>
             </form>
         </div>
     </div>
 </div>
 </div>

 <?php

    @$nis = $_POST['nis'];
    @$nama = $_POST['nama'];
    @$tempat_lahir = $_POST['tempat_lahir'];
    @$tgl_lahir = $_POST['tgl_lahir'];
    @$jk = $_POST['jk'];
    @$jurusan = $_POST['jurusan'];
    @$simpan = $_POST['simpan'];

    if ($simpan) {
        $sql = $koneksi->query("insert into tb_anggota(nis,nama,tempat_lahir,tgl_lahir,jk,jurusan)values('$nis','$nama','$tempat_lahir','$tgl_lahir','$jk','$jurusan')");

        if ($sql) {
    ?>
         <script type="text/javascript">
             alert("Data Berhasil di Simpan");
             window.location.href = "?page=anggota";
         </script>
 <?php
        }
    }

    ?>