<?php
require_once 'functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "<script>
    alert('Data Platform berhasil dihapus');
    document.location.href='index.php';
</script>";
}
