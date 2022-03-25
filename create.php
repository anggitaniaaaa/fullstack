<!--HALAMAN INPUT-->

<!DOCTYPE html>
<html>
<head>
	<title> Input Data Pegawai</title>
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
	width: 900px;
	margin: 5px 70px;
	padding: 30px 80px;
	font-style: oblique;
}

label{
	font-size: 15pt;
	box-shadow: 0px 0px 100px 1px #5F9EA0;
}

.formlogin{
	box-sizing: border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
	border-radius: 30px;
}

.tombol{
	background: #5F9EA0;
	color: rgb(245, 242, 239);
	font-size: 15pt;
	width: 80%;
	border: none;
	font-style: oblique;
	font-weight: bold;
    border-radius: 100px;
    margin: 50px 20px;
}
.zoom-effect {  
  position: relative;
  width: 100%;
  margin: 0 auto;
  overflow: hidden;  
}
 
.kotak input {
  -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
}
 
.zoom-effect:hover .kotak input {
  -webkit-transform: scale(1.08);
  transform: scale(1.08);
}
/*---------------------------------*/
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
    <b><a class="posisi" href="index.php">Kembali ke Beranda</a></b>
		</td>
		<td width="55%" align="right">
			<img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/fb.png" 
			style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/>
			<img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/ig.png" 
			style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/>
			<img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/phone.png" 
			style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/>
			<img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/email.png" 
			style= "width: 180px;  height: 40px; border-radius: 20px;" class="gambar2"/>
		</td>
	</tr>
</table>

<!------------------------------------------>
	<br/>
 
<h3 class="inputbaru">Input Data Pengguna Baru</h3>
	<div class="inputbaru1">
<!------------------------------------------>
<?php
	include 'koneksi.php';
	$today = date('Y-m-d');
	$char = 'SO' . $today . 'PEG';
	$query = mysqli_query($koneksi, "SELECT max(nip) as max_id FROM pengguna 
	WHERE nip LIKE '{$char}%' ORDER BY nip DESC LIMIT 1");
	$data = mysqli_fetch_assoc($query);
$getId = $data['max_id'];
$no = substr($getId, -4, 4);
$no = (int) $no;
$no += 1;
$newId = $char . sprintf("%04s", $no);
?>
<!------------------------------------------>

	<form action="create-aksi.php" method="post">
    <table>
        <tr>
            <td>
		<label><b>Username</b></label>
            </td>
            <td width="2%"></td>
            <td>
		<input type="text" name="username" class="formlogin" placeholder="username..." required="required">
            </td>
            <td width="15%"></td>
            <td>
		<label><b>Password</b></label>
            </td>
            <td width="2%"></td>
            <td>
            <input type="password" name="password" class="formlogin" placeholder="password..." required="required">
            </td>
        </tr>

        <tr>
            <td>
		<label><b>NIP</b></label>
            </td>
            <td width="2%"></td>
            <td>
		<input type="text" name="nip" class="formlogin" placeholder="nomor induk pegawai..." required="required" value="<?php echo $newId ?>" readonly>
            </td>
        </tr>
	
        <tr>
			<td></td>
			<td width="2%"></td>
			<td></td>
            <td width="15%"></td>
			<td>
			<div class="zoom-effect">
	<div class="kotak">
		<input type="submit" name="submit" class="tombol" value="SAVE">
	</div>
</td>
        </tr>
        <tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
        </tr>
		</table>
	</form>
</div>

</body>
</html>