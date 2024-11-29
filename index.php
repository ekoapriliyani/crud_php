<?php
include_once 'functions.php';

$platform = query("SELECT * FROM platform");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eduskill by Kelompok 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Eduskill by Kelompok 2</h1>
        <a href="tambah.php" class="btn btn-primary">Tambah (+)</a>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Platform</th>
                <th>Versi</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; ?>
            <?php foreach ($platform as $row): ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row["nama_platform"]; ?></td>
                    <td><?= $row["versi"]; ?></td>
                    <td><?= $row["deskripsi"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row['id']; ?>" class="btn btn-warning">Ubah</a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin hapus?');">Hapus</a>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </table>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>