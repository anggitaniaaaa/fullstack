<!--HALAMAN KONEKSI DATABASE-->

<?php 
$koneksi = mysqli_connect("localhost","root","","fullstack");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>