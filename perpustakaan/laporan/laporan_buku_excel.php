<?php


$koneksi = new mysqli("localhost", "root","", "db_perpustakaan");

$filename = "buku_excel-(".date('d-m-Y').").xls";

header ("content-disposition: attachment; filename= '$filename'");
header ("content-type: application/vdn.ms-excel");

?>

<h2> Laporan Anggota </h2>

<table border ="1">
	<tr>
         <th>No</th>
         <th>Judul</th>
         <th>Pengarang</th>
      	 <th>Penerbit</th>
         <th>ISBN</th>
         <th>Tahun Terbit</th>
         <th>Jumlah Buku</th>
                                
    </tr>
  </thead>
 <tbody>

        <?php

        $no = 1;
        $sql = $koneksi->query("select * from tb_buku");
        while ($data = $sql->fetch_assoc()) {

        ?>

        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['pengarang']; ?></td>
        <td><?php echo $data['penerbit']; ?></td>
        <td><?php echo $data['isbn']; ?></td>
        <td><?php echo $data['tahun_terbit']; ?></td>
        <td><?php echo $data['jumlah_buku']; ?></td>
        <td>
        </td>
     </tr>
   </tbody>
 </table>
