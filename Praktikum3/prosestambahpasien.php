<?php
include_once("koneksi.php");
$kode= $_POST['kode_pasien'];
$tgl= $_POST['tgl_masuk'];
$alamat= $_POST['alamat'];
$nama= $_POST['nama'];
$jenis= $_POST['jenis_sakit'];

$query="INSERT INTO tb_pasien
(kode_pasien,tgl_masuk,alamat,nama,jenis_sakit) VALUE
('$kode','$tgl','$alamat','$nama','$jenis')";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:menambahdata.php');
} else {
echo "input data gagal";
}
?>