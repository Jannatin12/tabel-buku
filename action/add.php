<?php
require "../function.php";

$judul = $_POST["judul"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$tahun_terbit = $_POST["tahun_terbit"];

$query = "INSERT INTO data_buku (judul, penulis, penerbit, tahun_terbit) VALUES ('$judul', '$penulis', '$penerbit', '$tahun_terbit')";
$isInsert = save($query);

if ($isInsert) {
    header("Location: /latphp/index.php");
} else {
    echo "Yahh gagal :<";
    die();
}

?>