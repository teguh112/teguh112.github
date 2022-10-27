<! DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<body>
<table>
<form action="" method="POST">
<table>
<tr>
<td>ID_KTP</td>
<td>:</td>
<td><input type="text" name="id_ktp" placeholder="ID_KTP" required name="text"></td>
  <div class="invalid-feedback">
      Masukkan Id KTP anda dengan valid.
</tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" placeholder="Nama" required name="text"></td>
  <div class="invalid-feedback">
      Masukkan nama anda dengan valid.
</tr>
<td>Alamat</td>
<td>:</td>
<td><input type="text" name="alamat" placeholder="Alamat" required name="text"></td>
  <div class="invalid-feedback">
      Masukkan alamat anda dengan valid.
</tr>
<td>Provinsi</td>
<td>:</td>
<td><input type="text" name="provinsi" placeholder="Provinsi" required name="text"></td>
</tr>
<td>Kota</td>
<td>:</td>
<td><input type="text" name="kota" placeholder="Kota" required name="text"></td>
</tr>
<td>No_Telepon</td>
<td>:</td>
<td><input type="text" name="no_telepon" placeholder="No_Telepon" required=""></td>
</tr>
<tr>
<td>KODE POBOX</td>
<td>:</td>
<td><input type="text" name="kode_pobox" placeholder="KODE POBOX" required=""></td>
</div>
</tr>
<tr>
<td></td>
<td><input type="submit" name="simpan" value="submit"></td>
<td><input type="reset" name="batal" value="batal"></td>
</tr>
</form>
</table>
</body>
</head>
</html>
</div>
</div>
<?php
include "koneksi.php";

if(isset($_POST['simpan']))
{
  $id_ktp=$_POST['id_ktp'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$provinsi=$_POST['provinsi'];
	$kota=$_POST['kota'];
	$no_telepon=$_POST['no_telepon'];
	$kode_pobox=$_POST['kode_pobox'];
	
$insert=mysqli_query($koneksi, "INSERT INTO tabelpelanggan values ('$id_ktp','$nama', '$alamat', '$provinsi','$kota', '$no_telepon', '$kode_pobox')") or die (mysqli_error());

}

?>