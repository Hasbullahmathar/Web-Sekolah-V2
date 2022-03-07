<!--bagian php-->
<?php
  require "koneksi.php";

  if(isset($_POST['bsimpan']))
  {
    $simpan = mysqli_query($koneksi, "INSERT INTO tsis (nama, alamat, tanggal_lahir, asal_sekolah, nomor_telfon)
                                      VALUES  ('$_POST[tnama]',
                                      '$_POST[talamat]',
                                      '$_POST[tlahir]',
                                      '$_POST[tasal]',
                                      '$_POST[tnotelfon]')
                                      ");
    //BAGIAN ALERT
    if($simpan)
    {
      echo "<script>
            alert('tambah data berhasil');
              document.location='administrator.php';
            </script>";
    }
    else
    {
      echo "<script>
            alert('tambah data gagal');
            document.location='tambah.php';
            </script>";
    }
  }
 ?>
<!--akhir php-->
<!--bagian html-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--------------------------------------------------------------------------------------------------------------------------------------------->
    <title>register</title>
    </head>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
    <body>
        <div class="container">
            <h1 class="text-center">Form Pendaftaran Siswa Smansgo</h1>
        <div class="card mt-4">
        <div class="card-header text-white bg-primary">
            Input Data Mahasiswa
        </div>
        <div class="card-body">
        <form method="POST" action="">
            <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="tnama" class="form-control" placeholder="masukkan nama anda" required>
            </div><div class="form-group">
            <label>Alamat Lengkap</label>
            <textarea class="form-control" name="talamat" placeholder="masukkan alamat anda"></textarea>
            </div>
            <fieldset>
              Tanggal Lahir<br>
              <input type="date" name="tlahir" required><br>
            </fieldset>
            <br>
            <div class="form-group">
            <label>Nomor Telfon</label>
            <input type="text" name="tnotelfon" class="form-control" placeholder="masukkan nomo telfon anda" required>
            </div>
            <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="tasal" class="form-control" placeholder="masukkan asal sekolah anda" required>
            </div>
        <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
        <button type="reset" class="btn btn-danger" name="bsreset">Ulang</button>
        </form>
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
