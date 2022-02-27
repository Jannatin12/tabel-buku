<?php
require "../function.php";

$idBuku = $_GET['id'];
$isDel = delete("DELETE FROM data_buku WHERE id = $idBuku");

if ($isDel) {
    header("Location: /latphp/index.php");
} else {
    echo "Yahh gagal :<";
    die();
}
?>