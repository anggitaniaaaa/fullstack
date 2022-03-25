<!--HALAMAN UPDATE-->

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
      <img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/fb.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/><img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/ig.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/phone.png" style= "width: 155px;  height: 30px; border-radius: 20px;" class="gambar3"/><img src="https://dev-helloworld-anggi.pantheonsite.io/wp-content/uploads/2021/11/email.png" style= "width: 150px;  height: 40px; border-radius: 20px;" class="gambar2"/>
    </td>
  </tr>
</table>

<!------------------------------------------>
  <h3 class="inputbaru">Halaman Edit Data</h3>

  <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * from pengguna where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form action="update-aksi.php" method="post" class="inputbaru1">
		<table>
            <tr>
        <td><input type="hidden" name="id" value="<?php echo $d['id']; ?>"></td>
        <td width="20%">Username</td>
        <td width="2%"></td>
        <td class="inputbaru2" width="25%"><input type="text" class="formlogin" name="username" value="<?php echo $d['username'] ?>"></td>
        <td width="5%"></td>
        <td>Password</td>
        <td width="2%"></td>
        <td class="inputbaru3"><input type="password" class="formlogin" name="password" value="<?php echo $d['password'] ?>"></td>
      </tr>
      <tr>
        <td></td>
        <td width="20%">NIP</td>
        <td width="2%"></td>
        <td class="inputbaru2"><input type="text" class="formlogin" name="nip" value="<?php echo $d['nip'] ?>"></td>
      </tr>
      <tr>
			<td></td>
			<td width="2%"></td>
			<td></td>
      <td width="15%"></td>
			<td>
    <div class="zoom-effect">
      </td>
      <div class="kotak">
        <td><input type="submit" name="submit" value="Update" class="tombol"></td>
      </div>
      </tr>
      </table>
		</form>
		<?php 
	}
	?>
</body>
</html>