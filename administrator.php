<!------------------------------------------------------------------------------------------------------------------------------------------------->
<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database ="pendidikan";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

    session_start();
    if (!isset($_SESSION['username']))
?>
<!------------------------------------------------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!------------------------------------------------------------------------------------------------------------------------------------------------->
  <p align="center">

  Halo, Selamat datang <b></b> <br>
  silahkan <a href="index.php"> <b>logout</b></a> untuk keluar dari aplikasi

  </p>

    <title>Admin Panel</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Halaman admin Smansgo</h1>
        <div class="card mt-4">
        <div class="card-header text-white bg-success">
            Daftar Siswa
        </div>
        <div class="card-body">
        <a href="tambah.php"><button type="button" class="btn btn-primary mb-3" name="bsreset">Tambah</button></a>
        <table class="table table-bordered table-striped">
            <tr>
                <th>No.</th>
                <th>Nama Lengkap</th>
                <th>Alamat Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Asal Sekolah</th>
                <th>No Telfon</th>
                <th>Aksi</th>
            </tr>
<!------------------------------------------------------------------------------------------------------------------------------------------------->
            <?php
                $no=1;
                $tampil = mysqli_query($koneksi, "SELECT * from tsis order by id_siswa desc");
                while($data = mysqli_fetch_array($tampil)) :
            ?>
<!------------------------------------------------------------------------------------------------------------------------------------------------->
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['alamat']?></td>
                <td><?=$data['tanggal_lahir']?></td>
                <td><?=$data['asal_sekolah']?></td>
                <td><?=$data['nomor_telfon']?></td>
                <td>
                    <a href="update.php?id=<?=$data['id_siswa']?>" class="btn btn-warning">Edit</a>
                    <a href="hapus.php?id=<?=$data['id_siswa']?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php endwhile; //penutup dari perulangan while ?>
        </table>
        </div>
        </div>
        </div>
    <!--------------------------------------------------------------------------------------------------------------------------------------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
