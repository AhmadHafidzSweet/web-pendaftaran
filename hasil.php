<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pendaftaran</title>
  </head>
  <body>
    <div class="container">
      <div id="header">
        <h1>Status</h1>
      </div>

      <div class="form-container">
          <fieldset>
          <?php
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $token = $_POST['token'];
          $asal = $_POST['asal'];
          $jk = $_POST['gender'];
          $alamat = $_POST['alamat'];
          $kendaraan = $_POST['kendaraan'];
          $web = $_POST['website'];
          $tgl = $_POST['tgl_lahir'];
          $img = $_POST['foto'];




$server = mysqli_connect("localhost","root","","db_pendaftaran");

if($server){
    echo "KONEKSI BERHASIL".'<br>';
}else{
    echo "TIDAK BERHASIL".'<br>';
}



$sql = "insert into pendaftaran (nama , gmail , token , kota , gender , alamat , kendaraan , alamat_web , tanggal , img)
values ('$nama' , '$email' , '$token' , '$asal' , '$jk' , '$alamat', '$kendaraan' , '$web' , '$tgl' , '$img')";

if(mysqli_query($server, $sql)) {
    echo "PENYIMPANAN BERHASIL";
}else{
    echo "GAGAL MENYIMPAN";
}
?>
          
          </div>
          </fieldset>



          
    </div>

    <footer>
        <p>Copyright &copy; Junior Aresss 2023</p>
      </footer>
  </body>
</html>