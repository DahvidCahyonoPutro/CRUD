<?php
include_once ("koneksi.php");
$query= "SELECT * FROM tb_pasien";
$hasil= mysqli_query ($koneksi, $query);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Data Pasien RS Sentosa</title>
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
<title> Data Pasien RS Sentosa</title>
 </head>
 <body>
 <div class="alert alert-success text-center" role="alert"
> <h2>Data Pasien RS Sentosa</h2>
 </div>
<a href="tambahpasien.php" class="btn btn-primary mb-1
mt-1"><i class="fas fa-user-plus mr-2"></i>Tambah Pasien</a>
 <table class="table table-bordered">
 <thead class="thead-light">
 <tr>
 <th scope="col">Nomor</th>
 <th scope="col">Kode Pasien</th>
 <th scope="col">Tgl Masuk</th>
 <th scope="col">Nama</th>
 <th scope="col">Alamat</th>
 <th scope="col">jenis Penyakit</th>
 <th scope="col">Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php $nomor=1; 
 while ($data=mysqli_fetch_array ($hasil)){ ?>
 <tr>
 <th scope="row"> <?php echo $nomor; ?>
</th>
 <td> <?php echo $data['kode_pasien']; ?> </td>
 <td> <?php echo $data['tgl_masuk']; ?> </td>
 <td> <?php echo $data['nama']; ?> </td>
 <td> <?php echo $data['alamat']; ?> </td>
 <td> <?php echo $data['jenis_sakit']; ?> </td>
 <td> <a href="ubahpasien.php?id=<?php echo $data['no_pasien']?>">Edit</a> 
 | <a href="hapuspasien.php?id=<?php echo $data['no_pasien']?>">Delete</a> </td>
 </tr>
<?php $nomor++; } ?>
 </tbody>
</table>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJ
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
77
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
 </body>
 </html>