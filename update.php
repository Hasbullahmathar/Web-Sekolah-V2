<!--bagian php-->
<?php
  require "koneksi.php";

  $tampil = mysqli_query($koneksi, "SELECT * FROM tsis WHERE id_siswa = '$_GET[id]' ");
  $data = mysqli_fetch_array($tampil);
  if($data)
  {
    $vnama = $data['nama'];
    $valamat = $data['alamat'];
    $vtanggal_lahir = $data['tanggal_lahir'];
    $vasal_sekolah = $data['asal_sekolah'];
    $vnomor_telfon = $data['nomor_telfon'];
  }
    if(isset($_POST['bsimpan'])){
    $edit = mysqli_query($koneksi, "UPDATE tsis set
                                     nama ='$_POST[tnama]',
                                     alamat ='$_POST[talamat]',
                                     tanggal_lahir ='$_POST[tlahir]',
                                     asal_sekolah ='$_POST[tasal]',
                                     nomor_telfon ='$_POST[tnotelfon]'
                                     WHERE id_siswa = '$_GET[id]'
                                     ");
    if($edit)
  {
    echo "<script>
    alert('edit data berhasil');
    document.location='administrator.php';
    </script>";
  }
    else
  {
    echo "<script>
    alert('edit data gagal');
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
            <input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="masukkan nama anda" required>
            </div><div class="form-group">
            <label>Alamat Lengkap</label>
            <textarea class="form-control" name="talamat" placeholder="masukkan alamat anda"><?=@$valamat?></textarea>
            </div>
            <fieldset>
              Tanggal Lahir<br>
              <input type="date" name="tlahir" value="<?=@$vtanggal_lahir?>" required><br>
            </fieldset>
            <div class="form-group">
            <label>Nomor Telfon</label>
            <input type="text" name="tnotelfon" value="<?=@$vnomor_telfon?>" class="form-control" placeholder="masukkan nomor telfon anda" required>
            </div>
            <div class="form-group">
            <label>Asal Sekolah</label>
            <input type="text" name="tasal" value="<?=@$vasal_sekolah?>" class="form-control" placeholder="masukkan asal sekolah anda" required>
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
