<?php
    require 'includes/header.php';
?>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="staticBackdropLabel">Thông báo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span>Bạn chắc chắn muốn xóa thể loại này?</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" id="btnConfirmDelete" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>

<div class="h1 pb-2 mb-4 border-bottom">
  Thể loại
</div>

<a href="form_genre.php" class="btn btn-primary mb-1">Thêm thể loại</a>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Thể loại</th>
      <th scope="col" class="col-2">Hành động</th>
    </tr>
  </thead>
  <tbody>

<?php
  require 'php/dbconnection.php';
  $query = "SELECT * FROM genres";
  $result = $conn->query($query);
  while ($row = $result->fetch_assoc()) {
    ?><tr><?php
      echo '<th class="align-middle">' . $row['genre_id'] . '</th>';
      echo '<th class="align-middle">' . $row['genre_name'] . '</th>';
      ?><th><?php
      echo '<a href="form_genre.php?genre_id=' . $row['genre_id'] . '" class="pe-1"><i class="fa-regular fa-pen-to-square" style="color: #ffffff"></i></a>';
      echo '<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-table="genres" data-id="' . $row['genre_id'] . '"><i class="fa-solid fa-trash" style="color: #ffffff"></i></button>';
      ?></th><?php
    ?></tr><?php
  }
?>
  </tbody>
</table>

<?php
    require 'includes/footer.php';
?>