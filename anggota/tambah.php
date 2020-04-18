<?php  
include '../koneksi.php';
include '../aset/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Anggota</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-4">
			<div class="card" style="width: 100%">
				<div class="card-header" style="width: 100%">
					<center><h2 class="card-title"><i class="fas fa-users">Tambah Angggota</h2></center>
				</div>
				<div class="card-body"></div>
				<center>
					<form method="post" action="proses-tambah.php">
						<table class="table">
							<tr>
								<td>Nama</td>
								<td><input type="text" name="nama" required></td>
							</tr>
							<tr>
								<td>Kelas</td>
								<td><input type="text" name="kelas" required></td>
							</tr>
							<tr>
								<td>No. Telp</td>
								<td><input type="text" name="telp" required></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" required></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="text" name="password" required></td>
							</tr>
							<tr>
								<th></th>
								<th><input type="submit" class="btn btn-primary" name="simpan" value="SIMPAN"></th>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../aset/footer.php';
?>