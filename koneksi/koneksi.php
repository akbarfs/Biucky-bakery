<?php
$koneksi = mysqli_connect("localhost","root","","biucky");
// cek koneksi
if (!$koneksi){
die("Error koneksi: " . mysqli_connect_errno());
}
?>