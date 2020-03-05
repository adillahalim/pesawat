<?php
require 'functions.php';

if (isset($_POST["submit"])) {

  if (tambah($_POST) > 0) {
    echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
    ";
  } else {
    echo " <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php';
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>Pemesanan Tiket</title>
</head>

<body>

  <nav class="navbar navbar-dark text-white bg-dark">
    <a class="navbar-brand" href="#">
      EZGoo
    </a>
    <div class="row w-25 mx-auto"><B>Pemesanan Tiket</B></div>

  </nav>

<form action="" method="post">
  <div class="container mt-4">
    <div class="w-50 mx-auto">
      <div class="text-white bg-dark">
        <div class="col">

          <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="inputNama" class="mt-3">Nama</label>
            <input type="text" class="form-control col-md-12" id="inputNama" placeholder="Nama" name="name">
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <i class="fas fa-map-marker-alt"></i>
              <label for="inputState">Asal</label>
              <select type="inputState" class="form-control" name="asal">
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
              <select type="inputState" class="form-control" name="tujuan">
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
              <input type="number" class="form-control" id="dewasa" placeholder="0" name="dewasa" require>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
            <div class="form-group col-md-6">
              <i class="fas fa-baby"></i>
              <label for="bayi">Bayi</label>
              <input type="number" class="form-control" id="bayi" placeholder="0" name="bayi" require>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Invalid.</div>
            </div>
          </div>
          <div class="forpm-group">
            <i class="fas fa-plane-departure"></i>
            <label for="input">Kelas Penerbangan</label>
            <select type="input" class="form-control col-md-12" name="kelas_penerbangan">
              <option>Economy</option>
              <option>Premium Economy</option>
              <option>Business</option>
              <option>First Class</option>
            </select>
          </div>


          <div class="form-group">
            <i class="fas fa-money-check-alt"></i>
            <label for="input">Pembayaran</label>
            <select type="input" class="form-control col-md-12" name="pembayaran">
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
              <input type="date" class="form-control col-md-12" id="tgl" placeholder="mm/dd/yyyy" name="tgl_berangkat" required>
            </div>
            <div class="form-group col-md-6">
              <i class="fas fa-calendar-alt"></i>
              <label for="tgl">Tanggal Pulang</label>
              <input type="date" class="form-control col-md-12" id="tgl" placeholder="mm/dd/yyyy" name="tgl_pulang" required>
            </div>
          </div>
        </div>


        <button type="submit" name="submit" class="btn btn-primary col-md-11 ml-3">Pesan</button>
        
        


      </div>
    </div>
  </div>

</form>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>