<?php  

include '../koneksi.php';

if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$telp = $_POST['telp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_level = 3;

	$sql = "INSERT INTO anggota (nama, kelas, telp, username, password, id_level) VALUES ('$nama', '$kelas', '$telp', '$username', '$password', '$id_level')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);
	if($count == 1){
		echo "
		<script>
			alert('Data Berhasil Ditambah!');
			document.location.href = 'index.php';
		</script>
		";
	}
 }
 include '../aset/footer.php';
 ?>
?>