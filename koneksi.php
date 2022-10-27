<?php
$servername='127.0.0.1';
$username='root';
$password='root';
$database='iman_db';
$koneksi=mysqli_connect($servername, $username, $password, $database) ;
if(!$koneksi) {
 die("connection failed. ".mysqli_connect_error()) ;
}
?>