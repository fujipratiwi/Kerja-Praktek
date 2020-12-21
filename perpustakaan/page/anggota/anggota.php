<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                DATA ANGGOTA
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            $no = 1;
                            $sql = $koneksi->query("select * from tb_anggota");
                            while ($data = $sql->fetch_assoc()) {


                                @$jk = ($data['jk'] == L) ? "Laki-Laki" : "Perempuan";
                                @$jurusan = ($data['jurusan'] == TKJ) ? "Teknik Komputer dan Jaringan" : "Teknik Sepeda Motor";

                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nis']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['tempat_lahir']; ?></td>
                                    <td><?php echo $data['tgl_lahir']; ?></td>
                                    <td><?php echo $jk; ?></td>
                                    <td><?php echo $jurusan; ?></td>
                                    <td>
                                        <a href="?page=anggota&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fa fa-pencil"></i> Ubah </a>
                                        <a onclick="return confirm ('Anda yakin akan Mengahapus data ini ?')" href="?page=anggota&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus </a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>
                <a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data </a>

                <a href="./laporan/laporan_anggota_excel.php" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i> Export to Excel </a>
        </div>
    </div>
</div>

