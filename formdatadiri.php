<html>
    <head>
        <title>Form Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="col-8">
        <h2>Form Registrasi<br></h2>
        <form action="hasil.php" method="post">
  <form>
    <div class="form-group row mb-3 ">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-7">
        <textarea class="form-control" id="alamat" rows="4" name="alamat"></textarea>
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
      </div>
    </div>
    <div class="form-group row mb-3">
      <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
      </div>
    </div>
    <label class="radio-label col-sm-2 mb-3">Jenis Kelamin</label>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
      <label class="form-check-label" for="laki-laki">Laki-Laki</label>
    </div>
    <div class="form-check form-check-inline mb-3">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
      <label class="form-check-label" for="perempuan">Perempuan</label>
    </div>
  </div>
  <div>
  <label for="pendidikan" class="col-md-2 inline-select mb-3">Pendidikan</label>
    <select class="form-select-inline" id="inline-select" name="pendidikan">
      <option value="SMK">SMK</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
    </select>
</div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-default">Cancel</button>
</form>  
</div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
