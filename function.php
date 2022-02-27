<?php
require "db.php";

  function get($query) {
    global $connect;
    $result = mysqli_query($connect, $query);
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
    return $data;
  }

  function save($query){
    global $connect;
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect); //u/ memberi tahu apakah ada data yang masuk/berubah
  }

  function delete($query){
    global $connect;
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect); //u/ memberi tahu apakah ada data yang masuk/berubah
  }
?>