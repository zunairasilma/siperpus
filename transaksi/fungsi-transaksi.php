<?php 
include '../koneksi.php';
function ambilBuku($kon){
	$sql = "SELECT id_buku, judul FROM buku";
	$res = mysqli_query($kon, $sql);

	$data_buku = array();

	while($data = mysqli_fetch_assoc($res)){
		$data_buku[] = $data;
	}

	return $data_buku;
}

function ambilAnggota($kon){
	$sql = "SELECT id_anggota, nama FROM anggota";
	$res = mysqli_query($kon, $sql);

	$data_anggota = array();

	while ($data = mysqli_fetch_assoc($res)){
		$data_anggota[] = $data;
	}
	return $data_anggota;
}

function ambilPeminjaman($kon, $id_pinjam){
	$sql = "SELECT * FROM peminjaman p INNER JOIN anggota a ON p.id_anggota = a.id_anggota INNER JOIN detail_pinjam dp USING(id_pinjam) INNER JOIN buku b ON dp.id_buku = b.id_buku where id_pinjam='$id_pinjam'";

	$res = mysqli_query($kon,$sql);
	$data = mysqli_fetch_assoc($res);
	return $data;
}

function ambilStok($kon, $id_buku){
	$sql = "SELECT stok FROM buku WHERE id_buku = $id_buku";
	$res = mysqli_query($kon,$sql);

	$data = mysqli_fetch_assoc($res);

	return $data['stok'];
}

function cekPinjam($kon, $id_anggota){
	$sql = "SELECT * FROM peminjaman inner join detail_pinjam using(id_pinjam) WHERE id_anggota = $id_anggota AND status = 'dipinjam'";
	$res = mysqli_query($kon,$sql);

	$pinjam = mysqli_affected_rows($kon);

	if($pinjam == 0)
		return true;
	else
		return false;
}

function updateStok($kon, $id_buku, $stok_update){
	$sql = "UPDATE buku SET stok = $stok_update WHERE id_buku = $id_buku";
	$res = mysqli_query($kon,$sql);
}

function hitungDenda($kon, $id_pinjam, $tgl_kembali){

	$denda = 0;

	$sql = "SELECT tgl_jatuh_tempo FROM peminjaman WHERE id_pinjam = $id_pinjam";
	$res = mysqli_query($kon, $sql);
	$data = mysqli_fetch_assoc($res);
	$tgl_jatuh_tempo = $data['tgl_jatuh_tempo'];

	$hari_denda = (strtotime($tgl_kembali) - strtotime($tgl_jatuh_tempo))/60/60/24;

	if($hari_denda >- 0){
		$denda = $hari_denda * 1080;
	}

	return $denda;
}






 ?>