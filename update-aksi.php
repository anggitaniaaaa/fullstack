<!--HALAMAN AKSI UPDATE-->

<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nip = $_POST['nip'];
$username = $_POST['username'];
$password = $_POST['password'];
mysqli_query($koneksi,"update pengguna set nip='$nip', username='$username', password='$password' where id='$id'");
header("location:index.php?pesan=update");
?>