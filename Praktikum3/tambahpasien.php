<!DOCTYPE html>
 <html>
 <head>
 <title>Tambah Pasien</title>
 <!-- Required meta tags -->

 <meta charset="utf-8">
 <meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/c
ss/bootstrap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263X
mFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
 <title>Tambah Pasien</title>
 </head>
 <body>
 <div class="alert alert-success text-center"
role="alert" > <h2>Menambah Data Pasien</h2>
 </div>
 <h1 class="ml-5">Masukan Data Pasien</h1>
 <form method="post"
action="prosestambahpasien.php" class="ml-5">
 <div class="form-group row">
 <label for="nama" class="col-sm-1 col-formlabel">Nama Pasien</label>
 <div class="col-sm-3">
 <input type="text" name="nama" class="formcontrol" placeholder="nama">
 </div>
 </div>
 <div class="form-group row">
 <label for="kode_pasien" class="col-sm-1 col-formlabel">Kode Pasien</label>
 <div class="col-sm-3">
 <input type="text" name="kode_pasien"
class="form-control" placeholder="kode_pasien">
 </div>
 </div>
 <div class="form-group row">
 <label for="jenis_sakit" class="col-sm-1 col-formlabel">Jenis Penyakit</label>
 <div class="col-sm-3">
 <input type="text" name="jenis_sakit"
class="form-control" placeholder="jenis_sakit">
 </div>
 </div>
 <div class="form-group row">
 <label for="alamat" class="col-sm-1 col-formlabel">alamat</label>
 <div class="col-sm-3">
 <input type="text" name="alamat" class="formcontrol" placeholder="alamat">
 </div>
 </div>
 <div class="form-group row">
 <label for="tgl_masuk" class="col-sm-1 col-formlabel">Tanggal</label>
 <div class="col-sm-3">
 <input type="text" name="tgl_masuk"
class="form-control" placeholder="tgl_masuk">
 </div>
 </div>
<button type="submit" class="btn btn-primary mb-1
mt-1 ml-0 mr-0" >Kirim</button>
<a href="menambahdata.php" class="btn btn-primary mb-1 mt-1
ml-0"><i class="fas fa-user-plus mr-0"></i>Data Pasien RS Sentosa</a>
</form>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJ
80
wFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"></script>
 <script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.
9/umd/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUib
X39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/
bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
 </body>
 </html>