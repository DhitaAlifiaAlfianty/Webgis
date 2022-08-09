<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Wisata</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
	      	<form action="./proses_tambah.php" method="post" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Nama Wisata</td>
                <td><input class="form-control" type="text" name="wisata" size="20" required></td>
              </tr>
             
              <tr>
                <td>Kategori</td>
                <td><input class="form-control" type="text" name="kategori" size="20" required></td>
              </tr>

              <tr>
                <td>Fasilitas</td>
                <td><input class="form-control" type="text" name="fasilitas" size="20" required></td>
              </tr>

              <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat" size="20" required></td>
              </tr>

              <tr>
                <td>Desa</td>
                <td><input class="form-control" type="text" name="desa" size="20" required></td>
              </tr>

              <tr>
                <td>Kecamatan</td>
                <td><input class="form-control" type="text" name="kecamatan" size="20" required></td>
              </tr>

              <tr>
                <td>LatLong</td>
                <td><input class="form-control" type="text" name="lat_long" size="20" required></td>
              </tr>
                    
              <tr>
                <td>Gambar Wisata</td>
                <td><input type="file" name="gambar_wisata" required="required">
				        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p></td>
              </tr> 
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>