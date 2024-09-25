<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biaya Operasional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-4 mb-4">Rincian Biaya Operasional</h1>
    
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">id_kru</th>
                        <th scope="col">id_koor</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Uang Masuk</th>
                        <th scope="col">Uang Keluar</th>
                        <th scope="col">Saldo</th>
                        <th scope="col">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>20-07-2024</td>
                        <td>01 Dwika</td>
                        <td>01</td>
                        <td>BBM</td>
                        <td>1.500.000</td>
                        <td>200.000</td>
                        <td>1.300.000</td>
                        <td>
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>