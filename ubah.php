<?php
require_once 'functions.php';

$id = $_GET['id'];

$pl = query("SELECT * FROM platform WHERE id = $id")[0];

if (isset($_POST["ubah"]) > 0) {
    if (ubah($_POST)) {
        echo "<script>
            alert('Data Platform berhasil diubah');
            document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Platform gagal diubah');
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
    <title>Ubah Data Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h2>Ubah Platform</h2>
        <form action="" method="post">
            <input hidden type="text" name="id" id="id" value="<?= $pl['id']; ?>">
            <div class="mb-3">
                <label for="nama_platform" class="form-label">Nama Platform :</label>
                <input type="text" class="form-control" name="nama_platform" id="nama_platform" value="<?= $pl['nama_platform']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="versi" class="form-label">Versi :</label>
                <input type="text" class="form-control" name="versi" id="versi" value="<?= $pl['versi']; ?>">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi :</label>
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $pl['deskripsi']; ?>">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
                <a href="index.php" class="btn">Batal</a>
            </div>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>