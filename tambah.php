<?php
require_once 'functions.php';

if (isset($_POST["simpan"]) > 0) {
    if (tambah($_POST)) {
        echo "<script>
            alert('Data Platform berhasil disimpan');
            document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Platform gagal disimpan');
        document.location.href='index.php';
    </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h2>Tambah Platform</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_platform" class="form-label">Nama Platform :</label>
                <input type="text" class="form-control" name="nama_platform" id="nama_platform" required>
            </div>
            <div class="mb-3">
                <label for="versi" class="form-label">Versi :</label>
                <input type="text" class="form-control" name="versi" id="versi">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi :</label>
                <textarea class="form-control" placeholder="Uraikan deskripsi" name="deskripsi" id="deskripsi" style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                <a href="index.php" class="btn">Batal</a>
            </div>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>