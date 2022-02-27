<?php
require "function.php";

$idBuku = $_GET['id'];
$buku = get("SELECT * FROM data_buku WHERE id = $idBuku");
$buku = $buku[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <h1 class="my-3">Edit Data BukuKu</h1>
      <form action="./action/update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $idBuku?>">
        <div class="form-group">
          <label for="judul">Judul Buku</label>
          <input type="text" name="judul" id="judul" class="form-control"
          value="<?php echo $buku['judul'] ?>">
        </div>

        <div class="form-group mt-3">
          <label for="penulis">Penulis Buku</label>
          <input type="text" name="penulis" id="penulis" class="form-control"
          value="<?php echo $buku['penulis'] ?>">
        </div>

        <div class="form-group mt-3">
          <label for="penerbit">Penerbit Buku</label>
          <input type="text" name="penerbit" id="penerbit" class="form-control"
          value="<?php echo $buku['penerbit'] ?>">
        </div>

        <div class="form-group mt-3">
          <label for="tahun_terbit">Tahun Terbit Buku</label>
          <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control"
          value="<?php echo $buku['tahun_terbit'] ?>">
        </div>
        <button type="submit" class="btn btn-success mt-3">Simpan</button>
      </form>
    </div>
</body>
</html>