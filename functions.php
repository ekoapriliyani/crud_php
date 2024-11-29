<?php

require 'koneksi.php';

// fungsi query tampil data
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi tambah data
function tambah($data)
{
    global $conn;
    $nama_platform = $data["nama_platform"];
    $versi = $data["versi"];
    $deskripsi = $data["deskripsi"];

    $query = "INSERT INTO platform VALUES(
        '', '$nama_platform', '$versi', '$deskripsi'
    )";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// fungsi ubah data
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama_platform = $data["nama_platform"];
    $versi = $data["versi"];
    $deskripsi = $data["deskripsi"];

    $query = "UPDATE platform SET
        nama_platform = '$nama_platform',
        versi = '$versi',
        deskripsi = '$deskripsi'
        WHERE id = $id
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// fungsi hapus
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM platform WHERE id = $id");
    return mysqli_affected_rows($conn);
}
