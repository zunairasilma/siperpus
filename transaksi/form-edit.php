<?php  

 include '../koneksi.php';
 include '/aset/header.php';

 include 'fungsi-transaksi.php';
 $id_pinjam = $_GET['id_pinjam'];

 $pinjam = ambilPeminjaman($kon, $id_pinjam);

?>