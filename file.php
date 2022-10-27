<! DOCTYPE html>
<html>
<head>
  <title>liat data</title>
</head>
<body>
<h2 align="center"> Data Mahasiswa Universitas</h2>

<a href="form.php">Tambah Data</a>

<table border="1" align="center" width="100%">
 <tr bgcolor="gree">
   <th>ID KTP</th>
   <th>NAMA</th>
   <th>Alamat</th>
   <th>Provinsi</th>
   <th>Kota</th>
   <th>No Telepon</th>
   <th>Kode POBOX</th>
   </tr>
 <tr>
   <?php
     include "koneksi.php";
     $query = mysqli_query($koneksi, "Select * From tabelcustomer");
     while ($data = mysqli_fetch_array($query)) {
   ?>
       <td><?php echo $data['ID KTP']; ?></td>
       <td><?php echo $data['NAMA']; ?></td>
       <td><?php echo $data['ALAMAT']; ?></td>
       <td><?php echo $data['PROVINSI']; ?></td>
       <td><?php echo $data['KOTA']; } ?></td>
       <td><?php echo $data['NO TELEPON']; } ?></td>
       <td><?php echo $data['KODE POBOX']; } ?></td>
    </tr>
</table>
</body>
</html>