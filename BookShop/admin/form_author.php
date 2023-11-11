<?php
    require 'includes/header.php';
    require 'php/dbconnection.php';

    $label_header = "Thêm tác giả";
    $form_action = "php/add_author.php";
    $author_name = "";

    if (isset($_GET["author_id"])) {
      $label_header = "Sửa thông tin tác giả";
      $form_action = "php/edit_author.php?author_id=" . $_GET["author_id"] ."";
      $author_id = $_GET["author_id"];

      $author_query = "SELECT * FROM authors WHERE author_id = '$author_id'";
      $author_result = $conn->query($author_query);
      if ($author_result->num_rows > 0) {
        $row = $author_result->fetch_assoc();
        $author_name = $row['author_name'];
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
      <label for="author_name" class="form-label">Tên tác giả</label>
      <input type="text" class="form-control" id="author_name" name="author_name" value="<?php echo $author_name ?>">
    </div>
  </div>

  <div class="col">
    <button type="submit" class="btn btn-primary">Gửi</button>
  </div>
</form>
<?php
    require 'includes/footer.php';
?>
