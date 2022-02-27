<?php
require "./function.php";

$data_buku = get("SELECT * FROM data_buku");

if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $data_buku = get("SELECT * FROM data_buku WHERE judul LIKE '%$keyword%'");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BukuKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#F5F5F5">
  <div class="container">
    <h1 class="my-3" style="text-align:center">Data BukuKu</h1>
    <form method="GET">
      <div class="form-group">
        <input type="text" name="keyword" id="keyword" placeholder="Cari buku berdasarkan judul..." class="form-control">
      </div>
      <div class="d-flex justify-content-between mt-2 mb-4">
        <button class="btn btn-primary">Cari</button>
        <a href="create.php" class="btn btn-primary">Tambah Data</a>
      </div>
    </form>
    <h4>Tabel Data Buku</h4>
    <table class="table table-bordered">
      <thead>
        <tr class="table-info" style="text-align:center">
          <th scope="col">Id</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Penulis</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Tahun Terbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($data_buku as $buku):?>
        <tr class="table-light">
          <td><?php echo $buku["id"] ?></td>
          <td><?php echo $buku["judul"] ?></td>
          <td><?php echo $buku["penulis"] ?></td>
          <td><?php echo $buku["penerbit"] ?></td>
          <td><?php echo $buku["tahun_terbit"] ?></td>
          <td>
            <a href="edit.php?id=<?php echo $buku["id"]?>" class="btn btn-warning mx-2">Edit</a>
            <a href="action/delete.php?id=<?php echo $buku["id"]?>" 
              class="btn btn-danger" 
              onclick=" return confirm('Yakin ingin menghapus data?')">
              Hapus
            </a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>