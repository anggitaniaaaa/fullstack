<!--HALAMAN AKSI INPUT-->

<?php 
include 'koneksi.php';
$nip = $_POST['nip'];
$username = $_POST['username'];
$password = $_POST['password'];
mysqli_query($koneksi,"insert into pengguna values('','$nip','$username','$password')");
header("location:index.php?pesan=input");
?>