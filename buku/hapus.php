<?php

include '../koneksi.php';

$id=$_GET['id_buku'];

$query = mysqli_query($kon, "DELETE FROM buku WHERE buku.id_buku='$id' ");

if($query>0){
    echo "<script> alert('Data Berhasil Dihapus'); document.location.href='index.php';
          </script>";
}else{
    echo "<script> alert('Data Gagal Dihapus'); document.location.href='index.php';
          </script>";
}
    

?>