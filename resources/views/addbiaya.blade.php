<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Biaya Operasional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-4 mb-4">Tambah Biaya Operasional</h1>
    
    <div class="container">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Tanggal</label>
        <input type="text" class="form-control bg-success p-2 text-dark bg-opacity-25" id="formGroupExampleInput" placeholder="dd-mm-yyy">
      </div>
      <div class="row g-2">     
        <div class="col-md mb-3">
            <label for="inputState" class="form-label">id_kru</label>
            <select id="inputState" class="form-select bg-success p-2 text-dark bg-opacity-25">
              <option selected>Driver</option>
              <option value="1">01 Dwika</option>
              <option value="2">02 Aulia</option>
              <option value="3">03 AP</option>
            </select>
          </div>
        <div class="col-md mb-3">
          <label for="inputState" class="form-label">id_koordinator</label>
          <select id="inputState" class="form-select bg-success p-2 text-dark bg-opacity-25">
              <option selected>Koordinator</option>
              <option value="1">01 Dwika</option>
            </select>
          </div>
        </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Keterangan</label>
        <input type="text" class="form-control bg-success p-2 text-dark bg-opacity-25" id="formGroupExampleInput2" placeholder="Keterangan">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Uang Masuk</label>
        <input type="text" class="form-control bg-success p-2 text-dark bg-opacity-25" id="formGroupExampleInput2" placeholder="Rp.">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Uang Keluar</label>
        <input type="text" class="form-control bg-success p-2 text-dark bg-opacity-25" id="formGroupExampleInput2" placeholder="Rp.">
      </div>

      <button type="submit" class="btn btn-primary mb-4" style="background: green">Simpan</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>