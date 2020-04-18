<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";
$res = mysqli_query($kon, $sql);
$pinjam = array();
while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}  
include '../aset/header.php';
?>

<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>

<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-users"></i> Data Anggota</h2>
</div>
<br>
<center><a href="tambah.php" class="badge badge-dark"><center>Tambah Anggota</center></a></center>
<div class="card-body"><table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
    </tr>
  </thead>
  <?php  
  $no = 1;
  foreach ($pinjam as $p){?>

  	<tr>
  		<th scope="row"><?= $no ?></th>
  		<td><?= $p['nama'] ?></th>
  		<td><?= $p['kelas'] ?></td>
  		<td>
  		<a href="detail.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-success">Detail</a>
      <a href="edit.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-warning">Edit</a>
      <a href="hapus.php?id_anggota=<?= $p['id_anggota']; ?>" class="badge badge-danger">Hapus</a>
  		</td>
  	</tr>

  <?php  
  	$no++;
  }
  ?>
</table>


	
	</div>
</div>

<?php  
include '../aset/footer.php';
?>