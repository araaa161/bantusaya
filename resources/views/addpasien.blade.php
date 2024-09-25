{{-- <?php
$servername = "localhost";
$database = "ambulansmwc";
$username = "root";
$password = "";
$usertable = "data_pasien";

$koneksi = mysqli_connect($servername, $username, $password, $database, $usertable);
$query = mysqli_query ($koneksi, "SELECT * FROM $usertable"); 
$result = mysqli_query ($query);

?> --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-4 mb-4">Tambah Data Pasien</h1>

        <div class="container">
          <form action="adddata" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control bg-success p-2 text-dark bg-opacity-25" id="formGroupExampleInput">
            </div>
            <div class="row g-2">
                <div class="col-md mb-3">
                    <label for="inputState" class="form-label">id_kru</label>
                    <select id="inputState" name="id_kru" class="form-select bg-success p-2 text-dark bg-opacity-25">
                        <option selected>Driver</option>
                        <option value="1">01 Dwika</option>
                        <option value="2">02 Aulia</option>
                        <option value="3">03 AP</option>
                    </select>
                </div>
                <div class="col-md mb-3">
                    <label for="inputState" class="form-label">id_koordinator</label>
                    <select id="inputState" name="id_koordinator" class="form-select bg-success p-2 text-dark bg-opacity-25">
                        <option selected>Koordinator</option>
                        <option value="1">01 Dwika</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control bg-success p-2 text-dark bg-opacity-25"
                    id="formGroupExampleInput2" placeholder="Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Alamat Pasien</label>
                <input type="text" name="alamat_pasien" class="form-control bg-success p-2 text-dark bg-opacity-25"
                    id="formGroupExampleInput2" placeholder="Alamat Pasien">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Tujuan</label>
                <input type="text" name="tujuan" class="form-control bg-success p-2 text-dark bg-opacity-25"
                    id="formGroupExampleInput2" placeholder="Tujuan">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control bg-success p-2 text-dark bg-opacity-25"
                    id="formGroupExampleInput2" placeholder="Keterangan">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Dokumentasi</label>
                <input class="form-control bg-success p-2 text-dark bg-opacity-25" name="unggah_gambar" type="file" id="formFile">
            </div>

            <button type="submit" class="btn btn-success mb-4">Simpan</button>
          </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
