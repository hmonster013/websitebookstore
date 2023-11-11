<?php
require 'includes/header.php';
require 'php/dbconnection.php';

$label_header = "Thêm sách";
$form_action = "php/add_book.php";
$book_name = "";
$author_id = "";
$genre_id = "";
$price = "";
$stock_quantity = "";
$description = "";
$publication_date = "";
$image_url = "";

if (isset($_GET["book_id"])) {
  $label_header = "Sửa thông tin sách";
  $form_action = "php/edit_book.php?book_id=" . $_GET["book_id"] ."";
  $book_id = $_GET["book_id"];

  $book_query = "SELECT * FROM books WHERE book_id = '$book_id'";
  $book_result = $conn->query($book_query);
  if ($book_result->num_rows > 0) {
    $row = $book_result->fetch_assoc();
    $book_name = $row['book_name'];
    $author_id = $row['author_id'];
    $genre_id = $row['genre_id'];
    $price = $row['price'];
    $stock_quantity = $row['stock_quantity'];
    $description = $row['description'];
    $publication_date = $row['publication_date'];
    $image_url = $row['image_url'];
  }
}
?>

<!-- Header -->
<div class="h1 pb-2 mb-4 border-bottom">
<?php echo $label_header ?>
</div>

<form action="<?php echo $form_action ?>" method="post">
  <div class="row mb-2">
    <div class="col">
      <div class="col mb-2">
        <label for="book_name" class="form-label">Tên sách</label>
        <input type="text" class="form-control" id="book_name" name="book_name" value="<?php echo $book_name ?>">
      </div>
      <div class="row mb-2">
        <div class="col">
          <label for="author_id" class="form-label">Tác giả</label>
          <select class="form-select" aria-label="Default select example" id="author_id" name="author_id">
            <option selected>Tác giả</option>
            <?php
              $author_query = "SELECT * FROM authors";
              $author_result = $conn->query($author_query);
              if ($author_result->num_rows > 0) {
                while ($row = $author_result->fetch_assoc()) {
                  if ($row["author_id"] == $author_id) {
                    echo "<option value='" . $row["author_id"] . "' selected>" . $row["author_name"] . "</option>";
                  } else {
                    echo "<option value='" . $row["author_id"] . "'>" . $row["author_name"] . "</option>";
                  }
                }
              }
            ?>
          </select>
        </div>
        <div class="col">
          <label for="genre_id" class="form-label">Thể loại</label>
          <select class="form-select" aria-label="Default select example" id="genre_id" name="genre_id">
            <option selected>Thể loại</option>
            <?php
                $genre_query = "SELECT * FROM genres";
                $genre_result = $conn->query($genre_query);
                if ($genre_result->num_rows > 0) {
                  while ($row = $genre_result->fetch_assoc()) {
                    if ($row["genre_id"] == $genre_id) {
                      echo "<option value='" . $row["genre_id"] . "' selected>" . $row["genre_name"] . "</option>";
                    } else {
                      echo "<option value='" . $row["genre_id"] . "'>" . $row["genre_name"] . "</option>";
                    }
                  }
                }
              ?>
            </select>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col">
          <label for="publication_date" class="form-label">Ngày xuất bản</label>
          <input type="date" class="form-control" id="publication_date" name="publication_date" value="<?php echo $publication_date ?>">
        </div>
      </div>
      <div class="col">
        <label for="description" class="form-label">Mô tả</label>
        <textarea class="form-control" id="description" name="description" rows="6"><?php echo $description ?></textarea>
      </div>
    </div>
    <div class="col-3">
      <div class="col mb-2">
        <label for="image_url" class="form-label">URL Ảnh</label>
        <input type="file" class="form-control" id="image_url" name="image_url" onchange="previewImg()">
        <input type="hidden" id="hidden_image_url" name="hidden_image_url" value="<?php echo $image_url ?>">
      </div>
      <div class="col mb-2">
        <img src="../book_images/<?php echo $image_url ?>" class="img-thumbnail" id="image_book" width="100" height="100">
      </div>
      <div class="col mb-2">
        <label for="price" class="form-label">Giá</label>
        <input type="text" class="form-control" id="price" name="price" value="<?php echo $price ?>">
      </div>
      <div class="col mb-2">
        <label for="stock_quantity" class="form-label">Số lượng tồn kho</label>
        <input type="text" class="form-control" id="stock_quantity" name="stock_quantity" value="<?php echo $stock_quantity ?>">
      </div>
      <button type="submit" class="btn btn-primary">Gửi</button>
    </div>
  </div>
</form>

<?php
require 'includes/footer.php';
?>
