<?php
require 'dbconnection.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $table = $_GET['table'];
  $deleteQuery = "DELETE FROM $table WHERE " . substr($table, 0, -1) . "_id = '$id'";

  if ($conn->query($deleteQuery) === TRUE) {
    header("Location: ../$table.php");
  } else {
    echo "Lỗi: " . $conn->error;
  }

  $conn->close();
}
?>
