<?php
    require 'includes/header.php';
    require 'php/dbconnection.php';

    $label_header = "Thêm thể loại";
    $form_action = "php/add_genre.php";
    $genre_name = "";

    if (isset($_GET["genre_id"])) {
      $label_header = "Sửa thông tin thể loại";
      $form_action = "php/edit_genre.php?genre_id=" . $_GET["genre_id"] ."";
      $genre_id = $_GET["genre_id"];

      $genre_query = "SELECT * FROM genres WHERE genre_id = '$genre_id'";
      $genre_result = $conn->query($genre_query);
      if ($genre_result->num_rows > 0) {
        $row = $genre_result->fetch_assoc();
        $genre_name = $row['genre_name'];
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
      <label for="genre_name" class="form-label">Tên tác giả</label>
      <input type="text" class="form-control" id="genre_name" name="genre_name" value="<?php echo $genre_name ?>">
    </div>
  </div>

  <div class="col">
    <button type="submit" class="btn btn-primary">Gửi</button>
  </div>
</form>
<?php
    require 'includes/footer.php';
?>
