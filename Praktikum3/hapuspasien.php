<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="delete from tb_pasien where no_pasien=$id";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:menambahdata.php');
}else {
echo "Hapus Data Gagal";
}