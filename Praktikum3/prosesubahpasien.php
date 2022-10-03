<?php
include_once("koneksi.php");
$kode= $_POST['kode_pasien'];
$tgl= $_POST['tgl_masuk'];
$alamat= $_POST['alamat'];
$nama= $_POST['nama'];
$jenis= $_POST['jenis_sakit'];
$query = "UPDATE tb_pasien SET nama='$nama',alamat='$alamat',tgl_masuk='$tgl',jenis_sakit='$jenis' WHERE kode_pasien='$kode'";
$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
header('location:menambahdata.php');
} else {
echo "Update data gagal";
}
?>