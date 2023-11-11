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
        <span>Bạn chắc chắn muốn xóa cuốn sách này?</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
        <button type="button" id="btnConfirmDelete" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>

<div class="h1 pb-2 mb-4 border-bottom">
  Sách
</div>

<a href="form_book.php" class="btn btn-primary mb-1">Thêm sách</a>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tên sách</th>
      <th scope="col">Id tác giả</th>
      <th scope="col">Id thể loại</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Ngày xuất bản</th>
      <th scope="col">Ảnh bìa</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>

<?php
  require 'php/dbconnection.php';
  $query = "SELECT * FROM books";
  $result = $conn->query($query);
  while ($row = $result->fetch_assoc()) {
    ?><tr><?php
      echo '<th>' . $row['book_id'] . '</th>';
      echo '<th>' . $row['book_name'] . '</th>';
      echo '<th>' . $row['author_id'] . '</th>';
      $genre_id = $row['genre_id'];
      $genre_query = "SELECT * FROM genres WHERE genre_id = '$genre_id'";
      $genre_result = $conn->query($genre_query);
      if ($genre_result->num_rows > 0) {
        $genre_row = $genre_result->fetch_assoc();
        $genre_name = $genre_row['genre_name'];
      }
      echo '<th>' . $genre_name . '</th>';
      echo '<th>' . $row['price'] . '</th>';
      echo '<th>' . $row['stock_quantity'] . '</th>';
      ?>
        <th>
          <button type="button" class="btn btn-secondary" 
                  data-bs-container="body" 
                  data-bs-toggle="popover" 
                  data-bs-custom-class="custom-popover"
                  data-bs-placement="top" 
                  data-bs-content=" 
      <?php
            echo $row['description'];
      ?>
            ">
            Xem nội dung
          </button>
        </th>
      <?php
      echo '<th>' . $row['publication_date'] . '</th>';
      echo '<th><img src="../book_images/' . $row['image_url'] . '" class="img-thumbnail" width="100" height="100"></th>';
      ?><th><?php
      echo '<a href="form_book.php?book_id=' . $row['book_id'] . '" class="pe-1"><i class="fa-regular fa-pen-to-square" style="color: #ffffff"></i></a>';
      echo '<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-table="books" data-id="' . $row['book_id'] . '"><i class="fa-solid fa-trash" style="color: #ffffff"></i></button>';
      ?></th><?php
    ?></tr><?php
  }
?>
  </tbody>
</table>

<?php
    require 'includes/footer.php';
?>