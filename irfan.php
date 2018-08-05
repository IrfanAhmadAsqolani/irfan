<html>
<head>
	<title>Form Pemesanan</title>
	<style>
		.judul {
			color: yellow;
			background-color:black; 

		}
		.judul2 {
			color: yellow;
			background-color:black;
		}
		.form {
			border-style: solid;
			background-color:red	;

		}
		form{
			display: inline-block;
		}
	</style>
</head>
<body>
	<div class="form">
	<h1 class="judul" align="center">Form Pemesanan</h1>
	<form method="post" action="proses_irfan.php">
		<h3 class="judul2" align="center">Detail Produk</h3>
		<table>
			<tr>
				<td>Nama Produk</td>
				<td><input type = "text" id="namaproduk" name="namaproduk"></td>
			</tr>
			<tr>
				<td>Harga Produk</td>
				<td><input type = "text" id="hargaproduk" name="hargaproduk"></td>
			</tr>
		</table>
		<table>
			<h3 class="judul2" align="center">Data Anda</h3>
			<tr>
				<td>Nama</td>
				<td><input type = "text" id="nama" name="nama"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type = "email" id="email" name="email"></td> 
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type ="text" id="nomortelepon" name="nomortelepon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type ="text" id="alamat" name="alamat"></td>
			</tr>
			<tr>
				<td>Domain Anda & <br>Keterangan Tambahan</td>
				<td><textarea type ="text" id="keterangan" name="keterangan"></textarea> </td>
			</tr>
		</table>
		<input type ="submit" name="submit" value="Kirim Form Pemesanan">
		</form>
	</div>
</body>
</html>