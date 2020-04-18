<?php 
include '../koneksi.php';
include '../aset/header.php';
$id_buku=$_GET["id_buku"];
$query=mysqli_query($kon, "SELECT * FROM buku INNER JOIN kategori ON buku.id_kategori = kategori.id_kategori WHERE id_buku=$id_buku");
$buku=mysqli_fetch_assoc($query);
 ?>
 <div class="container">
 	<div class="row mt-4">
 		<div class="col-md">
 			<center>
 				<div class="card" style="width: 100%">
 					<div class="card header" style="width: 100%">
 						<h2 class="card-title"><i class="fas fa-book"></i> Edit Data Buku</h2>
 					</div>
 					<div class="card-body">
 						<form action="edit-proses.php" method="post">
 							<table class="table">
 								<input type="hidden" name="id_buku" value="<?= $buku['id_buku']; ?>">
 								<tr>
 									<td>Judul Buku</td>
 									<td><input style="width: 100%" type="text" name="judul" value="<?= $buku['judul']?>" required></td>
 								</tr>
 								<tr>
 									<td>Penerbit</td>
 									<td><input style="width: 100%" type="text" name="penerbit" value="<?= $buku['penerbit']?>" required></td>
 								</tr>
 								<tr>
 									<td>Pengarang</td>
 									<td><input style="width: 100%" type="text" name="pengarang" value="<?= $buku['pengarang']?>" required></td>
 								</tr>
 								<tr>
 									<td>Ringkasan</td>
 									<td style=""><textarea style="width: 100%; height: 100%;" value="<?= $buku['cover']; ?>" type="textarea" name="ringkasan" required><?= $buku['ringkasan']; ?></textarea></td>
 								</tr>
 								<input style="width: 100%" type="hidden" name="cover" value="<?= $buku['cover']?>">
 								<tr>
 									<td>Stok</td>
 									<td><input style="width: 100%" type="number" name="stok" value="<?= $buku['stok']; ?>" required></td>
 								</tr>
 								<tr>
 									<td>Kategori</td>
 									<td>
 										<select style="width: 100%" name="id_kategori" required>
 											<option value="">--Pilih Kategori--</option>
 											<?php  
 											$sql1 = mysqli_query($kon, "SELECT * FROM kategori");
 											while ($query_kategori = mysqli_fetch_assoc($sql1)) : ?>
 											<option value="<?php echo $query_kategori['id_kategori']; ?>">
 												<?php echo $query_kategori['id_kategori']; ?>
 											</option>
 										<?php endwhile; ?>
 										</select>
 									</td>
 								</tr>
 								<tr>
 									<th></th>
 									<th><button style="width: 100%; height: 70%" type="submit" class="btn btn-primary" name="simpan">EDIT</button></th>
 								</tr>
 							</table>
 						</form>
 					</div>
 				</div>
 			</center>
 		</div>
 	</div>
 </div>
 <?php  
 include '../aset/footer.php';
 ?>