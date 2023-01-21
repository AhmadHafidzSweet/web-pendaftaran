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
        <img src="logo.png">
        <h1>Form Pendaftaran</h1>
        <p>Silakan isi form secara lengkap</p>
      </div>

      <div class="form-container">
        <form action="hasil.php" method="post" autocomplete="on" id="form1">
          <fieldset>
          <legend>Informasi Primer</legend>
          <div class="form-grup">
            <div class="label">
              <label>Nama Lengkap</label>
            </div>
            <div class="input">
              <input type="text" name="nama" placeholder="Isikan nama lengkap Anda" maxlength="20" autofocus style="width: 300px;height: 100px;">
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Email</label>
            </div>
            <div class="input">
              <input type="email" name="email" placeholder="mis. email@gmail.com" maxlength="20" autocomplete="off">
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Token</label>
            </div>
            <div class="input">
              <input type="password" name="token" placeholder="Masukan token yang sudah diberikan">
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Asal Kota</label>
            </div>
            <div class="input">
              <input type="text" name="asal" placeholder="tulis kota Anda">
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Gender</label>
            </div>
            <div class="input">
              <input type="radio" name="gender" value="1"> Laki-laki <br>
              <input type="radio" name="gender" value="2"> Perempuan
            </div>
          </div>
          </fieldset>



          <fieldset>
          <legend>Informasi Sekunder</legend>
          <div class="form-grup">
            <div class="label">
              <label>Alamat</label>
            </div>
            <div class="input">
              <textarea name="alamat" placeholder="Isi alamat lengkap Anda" rows="6"></textarea>
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Kendaraan</label>
            </div>
            <div class="input">
              <input type="checkbox" name="kendaraan" value="mobil"> Mobil <br>
              <input type="checkbox" name="kendaraan" value="motor"> Sepeda Motor <br>
              <input type="checkbox" name="kendaraan" value="sepeda"> Sepeda <br>
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Alamat Website</label>
            </div>
            <div class="input">
              <input type="url" name="website" placeholder="Masukan nama link portofolio">
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Tanggal lahir</label>
            </div>
            <div class="input">
              <input type="date" name="tgl_lahir">
            </div>
          </div>
          <div class="form-grup">
            <div class="label">
              <label>Foto Anda</label>
            </div>
            <div class="input">
              <label for="file-upload" class="upload-foto">
                Upload Foto
              </label>
              <input id="file-upload" type="file" name="foto">
            </div>
          </div>
          </fieldset>
          <div class="form-grup">
            <button type="submit"><img src="buttonsubmit.png"> KIRIM</button>
        </form>
      </div>
      

    </div>

    <footer>
        <p>Copyright &copy; Junior Aresss 2023</p>
      </footer>
  </body>
</html>