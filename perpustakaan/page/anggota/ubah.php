  <?php

    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_anggota where id ='$id'");

    $tampil = $sql->fetch_assoc();


    ?>
  <div class="panel panel-default">

      <div class="panel-heading">
          Ubah Data
      </div>

      <div class="panel-body">
          <div class="row">
              <div class="col-md-12">

                  <form method="POST">

                      <div class="form-group">
                          <label>NIS</label>
                          <input class="form-control" name="nis" value="<?php echo $tampil['nis']; ?>" readonly />
                      </div>

                      <div class="form-group">
                          <label>Nama</label>
                          <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                      </div>

                      <div class="form-group">
                          <label>Tempat Lahir</label>
                          <input class="form-control" name="tempat_lahir" value="<?php echo $tampil['tempat_lahir']; ?>" />
                      </div>

                      <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']; ?>" />
                          </select>

                      </div>

                      <br>

                      <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control" name="jk">
                              <option value="L" <?php if (@$tampil['jk'] == 'L') echo "selected"; ?>>Laki - Laki</option>
                              <option value="P" <?php if (@$tampil['jk'] == 'P') echo "selected"; ?>>Perempuan</option>
                          </select>
                      </div>

                      <div class="form-group">
                          <label>Jurusan</label>
                          <select class="form-control" name="jurusan">
                              <option value="TKJ" <?php if (@$tampil['jurusan'] == 'TKJ') echo "selected"; ?>>Teknik Komputer dan Jaringan</option>
                              <option value="TSM" <?php if (@$tampil['jurusan'] == 'TSM') echo "selected"; ?>>Teknik Sepeda Motor</option>
                          </select>
                      </div>

                      <div>
                          <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">

                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>

  <?php

    @$nama = $_POST['nama'];
    @$tempat_lahir = $_POST['tempat_lahir'];
    @$tgl_lahir = $_POST['tgl_lahir'];
    @$jk = $_POST['jk'];
    @$jurusan = $_POST['jurusan'];

    @$simpan = $_POST['simpan'];

    if ($simpan) {
        $sql = $koneksi->query("update tb_anggota set nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk', jurusan='$jurusan' where id='$id'");

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