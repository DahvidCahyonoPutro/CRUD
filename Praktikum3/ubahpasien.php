<?php
include_once("koneksi.php");
$id=$_GET['id'];
$query="SELECT * FROM tb_pasien WHERE no_pasien=$id";
$hasil=mysqli_query($koneksi,$query);
?>
<!DOCTYPE html>
 <html>
 <head>
 <title>Ubah Pasien</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstr
ap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA
wiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <title>Ubah Pasien</title>
 </head>
 <body>
 <div class="alert alert-success text-center" role="alert" >
<h2>DATA PASIEN</h2>
 </div>
 <h1 class="ml-5">Ubah Data Pasien</h1>

 <form method="post" action="prosesubahpasien.php"
class="ml-5">
 <?php while ($data=mysqli_fetch_array($hasil)) { ?>
 <div class="form-group row">
 <label for="nama" class="col-sm-1 col-form-label">Nama Pasien</label>
 <div class="col-sm-3">
 <input type="text" name="nama" class="form-control"
value="<?php echo $data['nama'] ?>" >

 </div>
 </div>
 <div class="form-group row">
 <label for="kode_pasien" class="col-sm-1 col-formlabel">Kode</label>
 <div class="col-sm-3">
 <input type="text" name="kode_pasien" class="form-control"
value="<?php echo $data['kode_pasien'] ?>" >
 </div>
 </div>
 <div class="form-group row">
 <label for="jenis_sakit" class="col-sm-1 col-formlabel">Jenis Penyakit</label>
 <div class="col-sm-3">
 <input type="text" name="Jenis_sakit" class="form-control" value="<?php echo $data['jenis_sakit'] ?>" >
 </div>
 </div>
 <div class="form-group row">
 <label for="alamat" class="col-sm-1 col-formlabel">alamat</label>
 <div class="col-sm-3">
 <input type="text" name="alamat" class="form-control"
value="<?php echo $data['alamat'] ?>">
 </div>
 </div>
 <div class="form-group row">
 <label for="tgl_masuk" class="col-sm-1 col-formlabel">Tanggal Masuk</label>
 <div class="col-sm-3">
 <input type="text" name="tgl_masuk" class="form-control"
value="<?php echo $data['tgl_masuk'] ?>">
 </div>
 </div>
<button type="submit" class="btn btn-primary mb-1 mt-1 ml-0
mr-0" >Kirim</button>
<a href="menambahdata.php" class="btn btn-primary mb-1 mt-1 ml0"><i class="fas fa-user-plus mr-0"></i>Data pasien</a>
</form>
<?php } ?>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVN
A/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/po
pper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fak
FPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.
min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyj
Uar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html>