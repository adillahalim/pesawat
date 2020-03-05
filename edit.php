<?php
require 'functions.php' ;

$id = $_GET["id"];

$tkt = query("SELECT * FROM tiket WHERE idTiket = $id")[0];

if (isset($_POST["submit"])) {

  if (edit($_POST) > 0) {
    echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'data.php';
        </script>
    ";
  } else {
    echo "
         <script>
         alert('data gagal diubah!');
         document.location.href = 'data.php';
         </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>

  <nav class="navbar navbar-dark text-white bg-dark">
    <a class="navbar-brand" href="#">
      EZGoo
    </a>
    <div class="row w-25 mx-auto"><B>Edit Pemesanan</B></div>


  </nav>

<form action="" method="post">
<input type="hidden" name="id" value="<?= $tkt["idTiket"];?>">
  <div class="container mt-4">
    <div class="w-50 mx-auto">
      <div class="text-white bg-dark">
        <div class="col">

          <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="inputNama" class="mt-3">Nama</label>
            <input type="text" class="form-control col-md-12" id="inputNama" placeholder="Nama" name="name" value="<?= $tkt["name"]; ?>">
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <i class="fas fa-map-marker-alt"></i>
              <label for="inputState">Asal</label>
              <select type="inputState" class="form-control" name="asal" value="<?= $tkt["asal"]; ?>">
                <option>Jakarta, Indonesia</option>
                <option>Yogyakarta, Indonesia</option>
                <option>Bali, Indonesia</option>
                <option>Surabaya, Indonesia</option>
                <option>Padang, Indonesia</option>
                <option>Medan, Indonesia</option>
                <option>Banda Aceh, Indonesia</option>
                <option>Makassar, Indonesia</option>
                <option>Bandung, Indonesia</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <i class="fas fa-map-marker-alt"></i>
              <label for="inputState">Tujuan</label>
              <select type="inputState" class="form-control" name="tujuan" value="<?= $tkt["tujuan"]; ?>">
                <option>Yogyakarta, Indonesia</option>
                <option>Bali / Denpasar, Indonesia</option>
                <option>Surabaya, Indonesia</option>
                <option>Jakarta, Indonesia</option>
                <option>Bandung, Indonesia</option>
                <option>Banda Aceh, Indonesia</option>
                <option>Padang, Indonesia</option>
                <option>Makassar, Indonesia</option>
                <option>Medan, Indonesia</option>
              </select>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <i class="fas fa-restroom"></i>
              <label for="dewasa">Dewasa</label>
              <input type="number" class="form-control" id="dewasa" placeholder="0" name="dewasa" value="<?= $tkt["dewasa"]; ?>" require>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
            <div class="form-group col-md-6">
              <i class="fas fa-baby"></i>
              <label for="bayi">Bayi</label>
              <input type="number" class="form-control" id="bayi" placeholder="0" name="bayi" value="<?= $tkt["bayi"]; ?>" require>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
          <div class="form-group">
            <i class="fas fa-plane-departure"></i>
            <label for="input">Kelas Penerbangan</label>
            <select type="input" class="form-control col-md-12" name="kelas_penerbangan" value="<?= $tkt["kelas_penerbangan"]; ?>">
              <option>Economy</option>
              <option>Premium Economy</option>
              <option>Business</option>
              <option>First Class</option>
            </select>
          </div>


          <div class="form-group">
            <i class="fas fa-money-check-alt"></i>
            <label for="input">Pembayaran</label>
            <select type="input" class="form-control col-md-12" name="pembayaran" value="<?= $tkt["pembayaran"]; ?>">
              <option>...</option>
              <option>BCA</option>
              <option>Mandiri</option>
              <option>BRI</option>
              <option>Alfamaret</option>
              <option>Indomaret</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <i class="fas fa-calendar-alt"></i>
              <label for="tgl">Tanggal Berangkat</label>
              <input type="date" class="form-control col-md-12" id="tgl" placeholder="mm/dd/yyyy" name="tgl_berangkat" value="<?= $tkt["tgl_berangkat"]; ?>" required>
            </div>
            <div class="form-group col-md-6">
              <i class="fas fa-calendar-alt"></i>
              <label for="tgl">Tanggal Pulang</label>
              <input type="date" class="form-control col-md-12" id="tgl" placeholder="mm/dd/yyyy" name="tgl_pulang" value="<?= $tkt["tgl_pulang"]; ?>" required>
            </div>
          </div>
        </div>


        <button type="submit" name="submit" class="btn btn-primary col-md-10 ml-5">Edit</button>
        

      </div>
    </div>
  </div>
</form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>