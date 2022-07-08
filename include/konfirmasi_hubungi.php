<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$pesan = $_POST['pesan'];
if(isset($_GET['kirim'])){
header("Location:index.php?include=kontak&notif=kosong"); //if e uncalen ae 
}else if(!isset($_GET['kirim'])){
$sql = "insert into `pelanggan`(nama,email,telepon,pesan) values ('$nama','$email','$telepon','$pesan')";
mysqli_query($koneksi,$sql);
header("Location:index.php?include=kontak&notif=berhasildikirim");
}
?>