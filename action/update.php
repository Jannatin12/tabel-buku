<?php
require "../function.php";

$idBuku = $_POST["id"];
$judul = $_POST["judul"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$tahun_terbit = $_POST["tahun_terbit"];

$isUpdate = save("UPDATE data_buku SET judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' WHERE id = $idBuku");
if ($isUpdate) {
    header("Location: /latphp/index.php");
} else {
    echo "Yahh gagal :<";
    die();
}

?>