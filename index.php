<!--HALAMAN UTAMA-->
	
<!DOCTYPE html>
<html>
<head>
	<title> Daftar Pegawai</title>
	<style>
		body{
	background: #E6E6FA;
}

.gambar2{
	margin: 0px 0px;
	padding: 2px 2px;
	margin-top: -30px;
}

.gambar3{
	margin: 0px 0px;
	padding: 4px 2px;
	margin-top: -30px;
}

.so{
	font-style: oblique;
	box-shadow: 100px 10px 10px 1px #708090;
}

.so2{
	font-style: oblique;
	box-shadow: 100px 10px 10px 1px #708090;
}

.tanggal{
	color: black;
	font-size: 12pt;
	width: 45%;
	box-shadow: 20px 10px 20px 1px #708090;
	padding: 0px 20px;
	font-style: oblique;
	margin: 10px 10px;
	text-align: center;
	font-weight: bold;
}

.posisi{
	color: black;
	font-size: 12pt;
	width: 50%;
	box-shadow: 20px 10px 20px 1px #708090;
	padding: 0px 20px;
	font-style: oblique;
	margin: 10px 10px;
	text-align: center;
}
/*---------------------------------*/

.tombol{
	color: #DC143C;
	width: 150px;
	background: white;
	margin: 10px 500px;
	padding: 10px 20px;
	box-shadow: 20px 10px 20px 1px #708090;
	font-style: oblique;
	text-decoration: none;
}

.inputbaru{
	text-align: center;
	text-transform: uppercase;
    width: 350px;
	background: white;
	margin: 10px 10px;
	padding: 10px 10px;
	box-shadow: 0px 0px 80px 1px #d6d6d6;
	border-radius: 100px;
	font-style: oblique;
}

.inputbaru1{
	text-align: center;
	text-transform: uppercase;
    width: 350px;
	background: #5F9EA0;
	margin: 10px 10px;
	padding: 10px 10px;
	box-shadow: 0px 0px 80px 1px #d6d6d6;
	border-radius: 100px;
	font-style: oblique;
}

.spasi{
    padding: 10px 20px;
}

.edit{
	background: #3CB371;
	color: white;
	font-size: 11pt;
	width: 90%;
	border: none;
	border-radius: 10px;
	padding: 2px 20px;
	font-style: oblique;
	font-weight: bold;
	margin: 10px 12px;
}

.hapus{
	background: #FF4500;
	color: white;
	font-size: 11pt;
	width: 90%;
	border: none;
	border-radius: 10px;
	padding: 2px 20px;
	font-style: oblique;
	font-weight: bold;
	margin: 10px 12px;
}

.pesan{
	width: 200px;
	color: black;
	margin: -35px 1000px;
	padding: 5px 25px;
	text-align: center;
	border: 1px solid #b32929;
	border-radius: 5px;
	box-shadow: 0px 0px 80px 1px #708090;
	font-weight: bold;
}

.link{
	background: #F0F8FF;
	color: red;
	font-size: 12pt;
	width: 20%;
	padding: 5px 20px;
	font-style: oblique;
	margin: 0px 0px;
	text-decoration: none;
}
</style>
</head>

<body>
	<div class="container">

<!------------------------------------------>

	<table width="100%">
		<tr>
			<td width="5%" align="right">
				<img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/so.png" style= "width: 200px;  height: 200px; border-radius: 20px;" class="gambar1"/>
			</td>
			<td width="95%">
				<h1 align="center" class="so"><font face= "Brush Script MT">STUDENT ONE ISLAMIC SCHOOL</font></h1><p/>
				<h2 align="center" class="so2"><font face= "Brush Script MT">Submission Website</font></h2><p/>
			</td>
		</tr>
	</table>

<!------------------------------------------>

<table width="100%">
	<tr>
		<td width="45%">
	<div class="tanggal">
		<?php
$timezone = new DateTimeZone('Asia/Jakarta');
$date = new DateTime();
$date->setTimeZone($timezone);

echo $date->format('l, d-m-Y H:i:s a') . '<br/>';
		?>
	</div>
		</td>
		<td width="55%" align="right">
			<img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/fb.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/><img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/ig.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/phone.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/email.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/>
		</td>
	</tr>
</table>
<table width="100%">
		<tr>
			<td colspan="4" width="1000px" align="right">
<a class="link" href="https://wa.widget.web.id/765f8e" target="_blank"><b>Klik untuk Hubungi Admin Jika Ada Kendala</b></a>
			</td>
		</tr>
	</table>
<!------------------------------------------>
	<br/>
	<br/>
<div class="pesan">
	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data Berhasil Diinput.";
		}else if ($pesan == "update"){
			echo "Data Berhasil Diupdate.";
		}else if ($pesan == "hapus"){
			echo "Data Berhasil Dihapus.";
		}
	}
	?>
</div>
	<br/>

	<a class="tombol" href="create.php"><b> +Tambah Data Baru  </b></a>

	<br>

</form>
	<h3 class="inputbaru"> Data Pegawai </h3>
	<table class ="table" width="70%">
		<tr class="inputbaru1">
			<th width="25px">No</th>
			<th width="50px">NIP</th>
			<th width="100px">Username</th>
			<th width="50px">Password</th>
			<th width="100px">Opsi</th>
		</tr>
<div class="spasi"></div>

		<?php
		include 'koneksi.php';
		$nomor = 1;
		$data = mysqli_query($koneksi,"select * from pengguna");
		while($d = mysqli_fetch_array($data)){
		?>

		<tr class="inputbaru2">
			<td align="center"><?php echo $nomor++; ?></td>
			<td align="left"><?php echo $d ['nip']; ?></td>
			<td align="left"><?php echo $d ['username']; ?></td>
			<td align="center"><?php echo $d ['password']; ?></td>
			<td align="center">
				<a class="edit" href="update.php?id=<?php echo $d ['id']; ?>">Edit</a> |
				<a class="hapus" href="delete.php?id=<?php echo $d ['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
	</div>
</body>
</html>
		