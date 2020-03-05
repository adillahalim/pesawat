<div class="col">
     
    <div class="form-group">
      <label for="inputNama">Nama</label>
      <input type="text" class="form-control col-md-8" id="inputNama" placeholder="Nama" name="name">
    </div>
     
    
    <div class="form-row">
      <div class="form-group col-md-4">
        <i class="fas fa-map-marker-alt"></i>
        <label for="inputState">Asal</label>
        <select type="inputState" class="form-control" name="asal">
            <option>Jakarta, Indonesia</option>
            <option>Yogyakarta, Indonesia</option>
            <option>Bali / Denpasar, Indonesia</option>
            <option>Surabaya, Indonesia</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <i class="fas fa-map-marker-alt"></i>
        <label for="inputState">Tujuan</label>
        <select type="inputState" class="form-control" name="tujuan">
            <option>Yogyakarta, Indonesia</option>
            <option>Bali / Denpasar, Indonesia</option>
            <option>Surabaya, Indonesia</option>
            <option>Jakarta, Indonesia</option>
        </select>
      </div>
    </div>
        
      
      <div class="form-row">
      <div class="form-group col-md-4">
        <label for="dewasa">Dewasa</label>
        <input type="number" class="form-control" id="dewasa" placeholder="0" name="dewasa" require>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Invalid.</div>  
      </div>
      <div class="form-group col-md-4">
        <i class="fas fa-map-marker-alt"></i>
        <label for="bayi">Bayi</label>
        <input type="number" class="form-control" id="bayi" placeholder="0" name="bayi" require>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Invalid.</div>
      </div>
    </div>
    <div class="form-group">
        <i class="fas fa-map-marker-alt"></i>
        <label for="input">Kelas Penerbangan</label>
        <select type="input" class="form-control col-md-8" name="kelas_penerbangan">
            <option>Economy</option>
            <option>Premium Economy</option>
            <option>Business</option>
            <option>First Class</option>
        </select>
      </div>
    

    <div class="form-group">
        <i class="fas fa-map-marker-alt"></i>
        <label for="input">Pembayaran</label>
        <select type="input" class="form-control col-md-8" name="pembayaran">
            <option>...</option>
            <option>BCA</option>
            <option>Mandiri</option>
            <option>BRI</option>
            <option>Alfamaret</option>
            <option>Indomaret</option>
        </select>
      </div>
      <div class="form-row">  
        <div class="form-group col-md-4">
          <i class="fas fa-calender-alt"></i>
          <label for="tgl">Tanggal Berangkat</label>
          <input type="date" class="form-control col-md-12" id="tgl" placeholder="mm/dd/yyyy" name="tgl_berangkat" required>
        </div>
        <div class="form-group col-md-4">
          <label for="tgl">Tanggal Pulang</label>
          <input type="date" class="form-control col-md-12" id="tgl" placeholder="mm/dd/yyyy" name="tgl_pulang" required>
        </div>
      </div>
</div>